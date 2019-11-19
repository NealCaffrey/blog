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
        $articles   = $article->with('category')->orderBy('created_at', 'desc')->paginate(10);
        $active     = $article->getActive();

        return view('index/home', compact('articles', 'active'));
    }
}
