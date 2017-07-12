<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
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
            'url.unique' => 'Url уже используется, возможно статья уже добавлена',
            'body.required' => 'Статья должна быть не пустой',
        ]);

        Article::create([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'body' => $request->get('body'),
            'is_published' => $request->get('is_published'),
            'description' => $request->get('description'),
            'keywords' => $request->get('keywords'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Статья добавлена');
    }

    /**
     * @param Article $articles
     */
    public function show(Article $articles)
    {
        //
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * @param Request $request
     * @param Article $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => ['required', Rule::unique('articles')->ignore($article->id)],
            'body' => 'required',
            'keywords' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Заголовок должен быть заполнен',
            'url.required' => 'Url адрес должен быть заполнен',
            'url.unique' => 'Url уже используется, возможно статья уже добавлена',
            'body.required' => 'Статья должна быть не пустой',
        ]);

        $article->update([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'body' => $request->get('body'),
            'is_published' => $request->get('is_published'),
            'description' => $request->get('description'),
            'keywords' => $request->get('keywords'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Новость обновлена');
    }

    /**
     * @param Article $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Статья удалена');
    }
}
