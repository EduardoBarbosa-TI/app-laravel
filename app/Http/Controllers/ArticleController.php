<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    public function index()
    {
        $article = Article::all();

        return view('articles.index', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // $article = Article::create($request);

        $article = new Article;
        $article->title = $request->input('title');
        $article->text = $request->input('text');
        $article->save();

        return view('articles.index');
    }
    

    public function show(Request $request)
    {

    }

    public function edit(Request $request)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy(Request $request)
    {

    }
}