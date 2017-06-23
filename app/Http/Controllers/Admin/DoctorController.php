<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            $path = $request->photo->storeAs('doctors', $photo);
        }

        Doctor::create([
            'full_name' => $request->get('full_name'),
            'url' => $request->get('url'),
            'info' => $request->get('info'),
            'experience' => $request->get('experience'),
            'department_id' => $request->get('department_id'),
            'specialization' => $request->get('specialization'),
            'photo' => $path,
            'show_in_catalog' => $request->get('show_in_catalog'),
            'show_in_main_page' => $request->get('show_in_main_page'),
            'description' => $request->get('description'),
            'keywords' => $request->get('keywords'),
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
