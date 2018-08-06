<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    //
    protected $fillable = [
        //'id',
        'site',
        'url',
        'title',
        'content',
        'description',
        'publish_date',
    ];
}
