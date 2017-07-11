<?php

namespace App\Http\Controllers;

use App\Article;
use App\Department;
use App\Doctor;
use App\News;
use App\Video;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $doctors = Doctor::where('show_in_main_page', 1)->get();
        $news = News::where('is_published', 1)->get();
        $articles = Article::where('is_published', 1)->get();
        $videos = Video::where('is_published', 1)->get();

        return view('welcome', compact('doctors', 'news', 'articles', 'videos'));
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    public function news()
    {

    }

    public function newsRead()
    {

    }

    public function articles()
    {

    }

    public function articleRead()
    {

    }

    public function videos()
    {

    }

    public function videoRead()
    {

    }
}
