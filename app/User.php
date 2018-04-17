<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token',
    ];


    public function articles()
    {
        return $this->hasmany('App\Article', 'user_id');
    }

    public function address()
    {
        return $this->hasOne('App\Address', 'user_id');
    }
}


//articles er maddome sob ek sathe get kora jacche