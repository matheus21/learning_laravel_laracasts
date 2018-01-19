<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{
    public function index()
    {
        /**
         * Get only published articles (published_at date less or equal to current date)
         * or unpublished articles (published_at date bigger than current date)
         */
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());

        Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)
    {

        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');

    }

}
