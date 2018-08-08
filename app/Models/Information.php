<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';

    protected $fillable = [
        'type',
        'content',
    ];

    public function getContentPluckAttribute(){
        return empty($this->content) ? [] : explode(PHP_EOL, $this->content);
    }
}
