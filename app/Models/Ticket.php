<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';

    protected $guarded = [];

    public $timestamps = false;

    public function getWorker(): HasOne
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
