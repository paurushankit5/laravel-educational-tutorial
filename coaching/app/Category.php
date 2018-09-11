<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function courses(){
    	return $this->hasMany('App\Course','cat_id');
    }
     public function seo(){
    	return $this->hasOne('App\Seo','cat_id');
    }

}
