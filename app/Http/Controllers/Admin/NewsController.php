<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required|unique:news',
            'body' => 'required',
            'keywords' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Заголовок должен быть заполнен',
            'url.required' => 'Url адрес должен быть заполнен',
            'url.unique' => 'Url уже используется, возможно новость уже добавлена',
            'body.required' => 'Новость должна быть не пустой',
        ]);

        News::create([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'body' => $request->get('body'),
            'is_published' => $request->get('is_published'),
            'description' => $request->get('description'),
            'keywords' => $request->get('keywords'),
        ]);

        return redirect()->route('news.index')->with('success', 'Новость добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => ['required', Rule::unique('news')->ignore($news->id)],
            'body' => 'required',
            'keywords' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Заголовок должен быть заполнен',
            'url.required' => 'Url адрес должен быть заполнен',
            'url.unique' => 'Url уже используется, возможно новость уже добавлена',
            'body.required' => 'Новость должна быть не пустой',
        ]);

        $news->update([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'body' => $request->get('body'),
            'is_published' => $request->get('is_published'),
            'description' => $request->get('description'),
            'keywords' => $request->get('keywords'),
        ]);

        return redirect()->route('news.index')->with('success', 'Новость обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Новость удалена');
    }
}
