<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ArticleSearchIndex extends Model
{
    use HasFactory;

    protected $table = 'article_search_index';

    protected $guarded = [];

    public function getArticle(): HasOne
    {
        return $this->hasOne(Article::class,'id','article_id');
    }
}
