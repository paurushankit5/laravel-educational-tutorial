<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function tagDetails(){
    	
    	$tag 	= 	Tag::where('tag_slug',request()->segment(2))->first();
    	if(count($tag))
    	{
    		//echo "<pre>";
    		//print_r($tag->courses);
    		//$array 	= 	array('tag'	=>	$tag);
    		return view('front/tagdetails',['tag' 	=> 	$tag]);
    	}
    	else{
    		return redirect('/');
    	}
    }
}
