<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
class user extends Model
{
    public function inquiry()
    {
        return $this->hasMany('App\Inquiry');
    }
    public function follow()
    {
        return $this->hasMany('App\Follow');
    }
    public function news()
    {
        return $this->hasMany('App\News');
    }
    public function like()
    {
        return $this->hasMany('App\Like');
    }
    public function qa()
    {
        return $this->hasMany('App\Qa');
    }
    public function block()
    {
        return $this->hasMany('App\Block');
    }
}
