<?php

namespace Anpu;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'title',
        'url',
        'description'
        ];
}
