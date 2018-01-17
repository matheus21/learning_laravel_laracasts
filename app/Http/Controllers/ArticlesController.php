<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Request;

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

    public function store(CreateArticleRequest $request)
    {

        Article::create($request);

        return redirect('articles');
    }

}
