<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function tester()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}


// belongsTo diya foregin key maddome data show korai..controller value er sathe method call kore dilei hoy $value->tester;
