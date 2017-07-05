<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $doctors = Doctor::where('show_in_main_page', 1)->get();

        return view('welcome', compact('doctors'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function doctors()
    {
        $doctors = Doctor::where('show_in_catalog', 1)->get();
        $departments = Department::all();

        return view('doctors', compact('doctors', 'departments'));
    }

    /**
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function doctor($url)
    {
        $doctor = Doctor::where('url', $url)->first();

        return view('doctor', compact('doctor'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
