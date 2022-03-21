<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addlist extends Model
{
    public function information()
    {
        return $this->belongsTo('App\Information');
    }
    public function mylist()
    {
        return $this->belongsTo('App\Mylist');
    }
}
