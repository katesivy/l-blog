<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view ('articles.index', ['articles' =>$articles]);
    }

    public function show(Article $article)
    {
        // $article = Article::findOrFail($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create() 
    {
        return view('articles.create');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        // $article = new Article();

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();
        Article::create($validatedAttributes);

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // compact('article') = ['article' => $article]
        $article = Article::find($id);
        // dd(compact('article'));
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        // $article = Article::find($id);
            
       

        return redirect($article->path());
    }
}

