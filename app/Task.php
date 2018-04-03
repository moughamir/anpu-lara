<?php

namespace Anpu;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function user()
    {
        return $this->belongTo(User::class);
    }
}
