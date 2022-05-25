<?php

namespace App\Http\Controllers\Home;

use App\Article;

class HomeController
{
    public function __invoke()
    {
        return view('home',['articles' => Article::orderBy('created_at', 'desc')->get()]);
    }
}
