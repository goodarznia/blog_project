<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    public function show(Article $article)
    {

        return view('admin.articles.show', ['article' => $article]);
    }

    public function list()
    {
        return view('admin.articles.list', ['articles' => Article::all()]);
    }

    public function createForm()
    {
        return view('admin.articles.create');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function createAction(ArticleRequest $request)
    {
        $validateData = $request->validated();
        auth()->user()->articles()->create([
            'title' => $validateData['title'],
            'body' => $validateData['body'],
        ]);
        return redirect('/admin/articles/list');
    }

    public function modifyForm(Article $article)
    {
        return view('admin.articles.edit', ['article' => $article]);
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function modifyAction(Article $article, ArticleRequest $request)
    {
        $validate_data = $request->validated();
        $article->update($validate_data);
        return redirect()->route('article_list');
    }

    public function removeAction(Article $article)
    {
        $article->delete();
        return redirect()->route('article_list');
    }
}
