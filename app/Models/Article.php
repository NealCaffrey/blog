<?php

namespace App\Models;

use App\Models\Traits\ActiveArticleHelper;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use ActiveArticleHelper;

    public function category()
    {
        return $this->belongsTo(Category::class, 'type', 'id');
    }
}
