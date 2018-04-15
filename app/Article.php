<?php

namespace Anpu;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'image',
        'url',
        'intro',
        'content'
        ];
}
