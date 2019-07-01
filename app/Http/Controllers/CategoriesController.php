<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show($name)
    {
        // 获取分类信息
        $category = Category::where('title', $name)->first();
        if (empty($category)) {
            return view('errors.404');
        }

        // 读取文章分类
        $articles = Article::where('type', $category->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('articles.index', compact('articles'));
    }
}
