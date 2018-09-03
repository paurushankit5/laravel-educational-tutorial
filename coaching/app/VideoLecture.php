<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoLecture extends Model
{
    public function section(){
    	return $this->belongsTo('App\Section');
    }
}
