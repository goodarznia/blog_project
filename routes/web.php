<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', 'Home\\HomeController')->name('home');
});

Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('articles/show/{article}', 'ArticleController@show')->name('show_article');
    Route::get('articles/list', 'ArticleController@list')->name('article_list');
    Route::get('articles/create', 'ArticleController@createForm')->name('create_form_article');
    Route::post('articles/create', 'ArticleController@createAction')->name('create_action_article');
    Route::get('articles/edit/{article}', 'ArticleController@modifyForm')->name('modify_form_article');
    Route::put('articles/edit/{article}', 'ArticleController@modifyAction')->name('modify_action_article');
    Route::delete('articles/delete/{article}', 'ArticleController@removeAction')->name('delete_action_article');
});

Route::get('/home', 'Home\\HomeController')->name('home');
Route::post('/search/result', 'Home\\HomeController@searchAction')->name('search_action');
Route::get('/article/show/{articleSlug}', 'Home\\HomeController@showArticle')->name('show_single_article');
Route::get('/articles/index', 'Home\\HomeController@allArticles')->name('show_all_articles');
