<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Article $article)
    {
        $articles = $article->orderBy('created_at', 'desc')->paginate(10);

        return view('index/home', compact('articles'));
    }

    public function about()
    {
        return view('index/about');
    }
}
