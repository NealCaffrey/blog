<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * 首页
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(Article $article)
    {
        $articles = $article->with('category')->orderBy('created_at', 'desc')->paginate(10);
        $active = $article->getActiveArticles();

        return view('index/home', compact('articles', 'active'));
    }

    /**
     * 关于页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about(Article $article)
    {
        $active = $article->getActiveArticles();

        return view('index/about', compact('active'));
    }
}
