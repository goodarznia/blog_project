<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

       public function show($id)
    {
        return view('article.show',['article'=>Article::findOrFail($id)]);
    }

    public function list ()
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
        $validateData=$request->validated();
        auth()->user()->getArticles()->create([
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
    public function modifyAction(Article $article, Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $article->update([
            'title' => $validateData['title'],
            'body' => $validateData['body'],
        ]);
        return redirect('/admin/articles/list');
    }

    public function removeAction(Article $article)
    {
        $article->delete();
        return back();
    }
}
