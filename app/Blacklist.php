<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    public function block()
    {
        return $this->hasMany('App\Block');
    }
}
