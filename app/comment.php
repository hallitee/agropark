<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //

    public function blog(){

    	return $this->belongsTo('App\blog')
    }
}
