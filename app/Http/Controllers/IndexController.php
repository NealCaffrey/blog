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
        $articles = $article->orderBy('created_at', 'desc')->paginate(10);

        return view('index/home', compact('articles'));
    }

    /**
     * 关于页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('index/about');
    }

    /**
     * 查询页
     * @param $keyword
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search($keyword)
    {
        $articles = Article::where('title', 'like', "%$keyword%")->paginate(10);

        return view('index/search', compact('articles', 'keyword'));
    }
}
