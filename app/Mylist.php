<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mylist extends Model
{
    public function addlist()
    {
        return $this->hasMAny('App\Addlist');
    }
}
