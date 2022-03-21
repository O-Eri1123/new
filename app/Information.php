<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public function addlist()
    {
        return $this->hasMany('App\Addlist');
    }
    public function like()
    {
        return $this->hasMany('App\Like');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
