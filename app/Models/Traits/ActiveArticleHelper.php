<?php

namespace App\Models\Traits;

use Carbon\Carbon;
use Cache;
use DB;
use App\Models\Article;

trait ActiveArticleHelper
{
    // 用于存放临时数据
    protected $articles = [];

    // 缓存相关配置
    protected $cache_key = 'active_article';
    protected $cache_expire_in_seconds = 3600 * 13;

    /**
     * 从缓存获取数据
     * 如果没有数据，重新获取并缓存
     */
    public function getActiveArticles()
    {
        return Cache::remember($this->cache_key, $this->cache_expire_in_seconds, function () {
            return $this->calculateActiveArticles();
        });
    }

    /**
     * 获取最热文章列表
     * @return mixed
     */
    public function calculateActiveArticles()
    {
        $articles = Article::orderBy('visits', 'desc')->limit(5)->get();

        return $articles;
    }
}