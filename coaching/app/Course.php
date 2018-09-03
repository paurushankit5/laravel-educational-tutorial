<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function category(){
    	return $this->belongsTo('App\Category' ,'cat_id');
    }

    public function savecourse($course_data){
     	//echo $data->course_name;

     	$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($course_data->course_name)," "));
		$baseslug					=	$data;	
		$check						=	array('cat_slug'		=>		$data);
		$j=1;
		while($this->where('course_slug', $data)->count())
		{				
			$data	=	$baseslug.'-'.$j;				
			$check	=	array('cat_slug'		=>		$data);
			$j++;
		}
		$this->course_name 			= 	$course_data->course_name;
		$this->course_overview 		= 	$course_data->course_overview;
		$this->course_details 		= 	$course_data->course_details;
		$this->course_requirements 	= 	$course_data->course_requirements;
		$this->course_language	 	= 	$course_data->course_language;
		$this->course_lecture_count	= 	$course_data->course_lecture_count;
		$this->cat_id				= 	$course_data->cat_id;
		$this->user_id	 			= 	auth()->user()->id;
		$this->course_slug 			= 	$data;
		if($this->save())
		{
			return $this->id;
		}
		else{
			return 0;
		}
    }
}
