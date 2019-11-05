<?php

namespace App\Models;

use App\Models\Traits\ActiveArticleHelper;
use Illuminate\Database\Eloquent\Model;
use HyperDown\Parser;

class Article extends Model
{
    use ActiveArticleHelper;

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model){
            $parser = new Parser();
            $model->content_html = $parser->makeHtml($model->content);
            $model->introduction = mb_substr(strip_tags($model->content_html), 0, 100);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'type', 'id');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
