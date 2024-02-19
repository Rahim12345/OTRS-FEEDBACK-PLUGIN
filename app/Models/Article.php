<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $guarded = [];

    public function getCreator(): HasOne
    {
        return $this->hasOne(User::class,'id','create_by');
    }
}
