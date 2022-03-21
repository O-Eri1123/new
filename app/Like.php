<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function information()
    {
        return $this->belongsTo('App\Information');
    }
}
