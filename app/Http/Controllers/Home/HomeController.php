<?php

namespace App\Http\Controllers\Home;

use App\Article;
use Illuminate\Http\Request;

class HomeController
{
    public function __invoke()
    {
        return view('home', ['articles' => Article::orderBy('created_at', 'desc')->get()]);
    }

    public function showArticle(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    public function allArticles()
    {
        return view('article.list', ['articles' => Article::orderBy('created_at', 'desc')->get()]);
    }

    public function searchAction(Request $request)
    {
        $search = '%' . $request->input('search') . '%';

        return view('article.search_result', [
            'searchFor' => $request->input('search'),
            'articles' => Article::where('title', 'Like', $search)
                ->orWhere('body', 'Like', $search)->orderBy('created_at', 'desc')
                ->get()]);
    }
}
