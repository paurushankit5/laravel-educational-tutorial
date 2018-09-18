<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function seo(){
    	return $this->hasOne('App\Seo','subcat_id');
    }
    public function category(){
    	return $this->belongsTo('App\Category','cat_id');
    }
}
