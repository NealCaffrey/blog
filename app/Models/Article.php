<?php

namespace App\Models;

use App\Models\Traits\ActiveArticleHelper;
use Illuminate\Database\Eloquent\Model;
use function foo\func;

class Article extends Model
{
    use ActiveArticleHelper;

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model){
            $model->introduction = substr($model->content, 0, 200);
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
