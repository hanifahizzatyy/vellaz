<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category() {
        return $this->belongTo('App\Category');
    }

    public function user() {
        return $this->belongTo('App\User');
    }
}
