<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('admin.doctors.index', ['doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();

        return view('admin.doctors.create', ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'url' => 'required|unique:doctors',
            'info' => 'required',
            'description' => 'required',
            'keywords' => 'required',
            'specialization' => 'required',
            'photo' => 'image:jpeg,jpg,png',
        ], [
            'full_name.required' => 'Полное имя врача должно быть заполнено',
            'url.required' => 'Url адрес должен быть заполнен',
            'url.unique' => 'Url уже используется, возможно врач уже добавлен',
            'info.required' => 'Информация о враче должна быть заполнена',
            'specialization.required' => 'Заголовок должен быть заполнен',
            'photo.image' => 'Разрешенные форматы фотографий jpeg, jpg, png',
        ]);

        $path = '';
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $photo = $request->get('url') . '.' . $request->photo->extension();
            $saved = $request->photo->storeAs('doctors', $photo);
            $img = Image::make(Storage::disk('local')->get($saved));
            $img->fit(700, 500, function ($constraint) {
                $constraint->upsize();
            })->save(public_path('images/doctors/' . $photo));
            $img->resize(300, 200, function ($constraint) {
                $constraint->upsize();
            })->save(public_path('images/doctors/thumb-' . $photo));
            Storage::delete($saved);
            $path = $photo;
        }

        Doctor::create([
            'full_name' => $request->get('full_name'),
            'url' => $request->get('url'),
            'info' => $request->get('info'),
            'experience' => $request->get('experience'),
            'department_id' => $request->get('department_id'),
            'specialization' => $request->get('specialization'),
            'photo' => $path,
            'show_in_catalog' => $request->get('show_in_catalog', false),
            'show_in_main_page' => $request->get('show_in_main_page', false),
            'description' => $request->get('description', ''),
            'keywords' => $request->get('keywords', ''),
        ]);

        return redirect()->route('doctor.index')->with('success', 'Врач добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $departments = Department::all();

        return view('admin.doctors.edit', compact('doctor', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'url' => ['required', Rule::unique('doctors')->ignore($doctor->id)],
            'info' => 'required',
            'specialization' => 'required',
            'photo' => 'image:jpeg,jpg,png',
            'keywords' => 'required',
            'description' => 'required',
        ], [
            'full_name.required' => 'Полное имя врача должно быть заполнено',
            'url.required' => 'Url адрес должен быть заполнен',
            'url.unique' => 'Url уже используется, возможно врач уже добавлен',
            'info.required' => 'Информация о враче должна быть заполнена',
            'specialization.required' => 'Заголовок должен быть заполнен',
            'photo.image' => 'Разрешенные форматы фотографий jpeg, jpg, png',
        ]);

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $photo = $request->get('url') . '.' . $request->photo->extension();
            $saved = $request->photo->storeAs('doctors', $photo);
            $img = Image::make(Storage::disk('local')->get($saved));
            $img->fit(700, 500, function ($constraint) {
                $constraint->upsize();
            })->save(public_path('images/doctors/' . $photo));
            $img->resize(300, 200, function ($constraint) {
                $constraint->upsize();
            })->save(public_path('images/doctors/thumb-' . $photo));
            Storage::delete($saved);
            $path = $photo;
        } else {
            $path = $doctor->photo;
        }

        $doctor->update([
            'full_name' => $request->get('full_name'),
            'url' => $request->get('url'),
            'info' => $request->get('info'),
            'experience' => $request->get('experience'),
            'department_id' => $request->get('department_id'),
            'specialization' => $request->get('specialization'),
            'photo' => $path,
            'show_in_catalog' => $request->get('show_in_catalog', 0),
            'show_in_main_page' => $request->get('show_in_main_page', 0),
            'description' => $request->get('description'),
            'keywords' => $request->get('keywords'),
        ]);

        return redirect()->route('doctor.index')->with('success', 'Информация о враче обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        unlink(public_path('images/doctors/' . $doctor->photo));
        unlink(public_path('images/doctors/thumb-' . $doctor->photo));
        $doctor->delete();

        return redirect()->route('doctor.index')->with('success', 'Врач удален');
    }
}
