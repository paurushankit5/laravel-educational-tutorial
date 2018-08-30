<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tag extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Post');
    }
    public function savetag($tag_name){
    	$tag_slug						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($tag_name)," "));
    	
    	if(!$this->where('tag_slug',$tag_slug)->count())
    	{
			$this->tag_name  = 		$tag_name;
			$this->tag_slug  = 		$tag_slug;
			$this->user_id   = 		auth()->user()->id;
			$id = $this->save();
			if($id)
			{
				return $this->id;
			}
			else{
				return 0;
			}
	   	}
	   	else{
	   		return "exists";
	   	}
    }
    public function updatetag($tag_name,$id){
    	$tag_slug						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($tag_name)," "));
    	//if the new tag name has already a slug then return exists otherwise update
    	if(!$this->where([['tag_slug',$tag_slug],['id','<>',$id]])->count())
    	{
    		$tag 			= 	 	$this->find($id);
			$tag->tag_name  = 		$tag_name;
			$tag->tag_slug  = 		$tag_slug;
			$tag->user_id   = 		auth()->user()->id;			
			if($tag->save()){
				return $id;
			}
			else{
				return 0;
			}
	   	}
	   	else{
	   		return "exists";
	   	}
    }
}
