<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class twit extends Model
{
    protected $fillable = [
        'content',
        'likes'
    ];

}