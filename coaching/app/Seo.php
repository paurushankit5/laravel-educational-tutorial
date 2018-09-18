<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    public function saveseo($field_name,$field_value,$data){
    	 
		$this->title  		 = 	$data->title;
		$this->keyword  	 =  $data->keyword;
		$this->description   = 	$data->description;
		if($field_name == "cat_id")
		{
			$this->cat_id 	= 	$field_value;
		}
		else if($field_name == "course_id")
		{
			$this->course_id 	= 	$field_value;
		}
		else if($field_name == "tag_id")
		{
			$this->tag_id 	= 	$field_value;
		}
		else if($field_name == "subcat_id")
		{
			$this->subcat_id 	= 	$field_value;
		}
		else if($field_name == "page_name")
		{
			$this->page_name 	= 	$field_value;
		}
		$id = $this->save();
		if($id)
		{
			return $this->id;
		}
		else{
			return 0;
		}
    } 
    public function updateseo($id,$data){
    	$seo 				= 	$this->find($id); 
		$seo->title  		= 	$data->title;
		$seo->keyword  	 	=   $data->keyword;
		$seo->description   = 	$data->description;
		if(isset($data->page_name))
		{
			$seo->page_name 	= 	$data->page_name;
		}
		if($seo->save()){
				return 1;
		}
		else{
			return 0;
		}
    }
    public function getseo($field_name,$field_value){
    	return $this->where($field_name,$field_value)->first();
    }
}
