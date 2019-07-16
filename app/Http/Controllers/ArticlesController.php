<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * 文章详情页
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
        $active = $article->getActiveArticles();
        return view('articles.show', compact('article', 'active'));
    }


    /**
     * 文章查询页
     * @param $keyword
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search($keyword, Article $article)
    {
        $articles = $article->with('category')->where('title', 'like', "%$keyword%")->paginate(10);
        $active = $article->getActiveArticles();

        return view('articles/search', compact('articles', 'keyword', 'active'));
    }
}
