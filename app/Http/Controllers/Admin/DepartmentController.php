<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class DepartmentController
 * @package App\Http\Controllers\Admin
 */
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deps = Department::all();

        return view('admin.department.index', ['departments' => $deps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
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
            'name' => 'required',
            'url' => 'required',
            'description' => 'required',
            'short' => 'required',
        ], [
            'name.required' => 'Название департамента должно быть заполнено',
            'url.required' => 'Url адрес должен быть заполнен',
            'short.required' => 'Краткое описание должено быть заполнено',
            'description.required' => 'Описание департамента должно быть заполнено',
        ]);

        Department::create([
            'name' => $request->get('name'),
            'url' => $request->get('url'),
            'short' => $request->get('short'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('department.index')->with('success', 'Департамент добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('admin.department.edit', ['department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
            'description' => 'required',
            'short' => 'required',
        ], [
            'name.required' => 'Название департамента должно быть заполнено',
            'url.required' => 'Url адрес должен быть заполнен',
            'short.required' => 'Краткое описание должено быть заполнено',
            'description.required' => 'Описание департамента должно быть заполнено',
        ]);

        $department->update([
            'name' => $request->get('name'),
            'url' => $request->get('url'),
            'short' => $request->get('short'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('department.index')->with('success', 'Департамент обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('department.index')->with('success', 'Департамент удален');
    }
}
