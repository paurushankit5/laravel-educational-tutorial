<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function courses(){
    	return $this->hasMany('App\Course');
    }
}
