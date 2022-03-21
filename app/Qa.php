<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qa extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
