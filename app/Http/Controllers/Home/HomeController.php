<?php

namespace App\Http\Controllers\Home;

class HomeController
{
    public function __invoke()
    {
        return view('home');
    }
}
