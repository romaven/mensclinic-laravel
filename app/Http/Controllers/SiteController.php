<?php

namespace App\Http\Controllers;

use App\Article;
use App\Department;
use App\Doctor;
use App\News;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('ru');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $doctors = Doctor::where('show_in_main_page', 1)->get();
        $news = News::where('is_published', 1)->get();
        $articles = Article::where('is_published', 1)->get();
        $videos = Video::where('is_published', 1)->get();
        $departments = Department::all();

        return view('welcome', compact('doctors', 'news', 'articles', 'videos', 'departments'));
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
        $news = News::all();

        return view('news', compact('news'));
    }

    public function newsRead($url)
    {
        $news = News::where('url', $url)->first();

        return view('news_read', compact('news'));
    }

    public function articles()
    {
        $articles = Article::all();

        return view('articles', compact('articles'));
    }

    public function articleRead($url)
    {
        $article = Article::where('url', $url)->first();

        return view('article_read', compact('article'));
    }

    public function videos()
    {

    }

    public function videoRead()
    {

    }

    public function department($url)
    {
        $department = Department::where('url', $url)->firstOrFail();
        $doctors = $department->doctors;

        return view('department', compact('department', 'doctors'));
    }
}
