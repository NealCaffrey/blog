<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        // 读取文章分类
        $articles = Article::where('type', $category->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('articles.index', compact('articles'));
    }
}
