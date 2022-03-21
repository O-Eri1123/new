<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function information()
    {
        return $this->belongsTo('App\Information');
    }
}
