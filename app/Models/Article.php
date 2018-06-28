<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'content',
        'short_content',
        //'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'expiration_date',
        'is_available',
        'locale_id'
    ];
}
