<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    public function courseDetails(){
    	$course_slug	 = 	  	request()->segment(3);
    	$where 			= 	array(
    								"course_slug"	=> 		$course_slug,
    								"is_active"		=> 		1,
    								"is_deleted"	=> 		0,
    							);
    	$course 		 = 		Course::where($where)->first();
    	$array			 = 		array(
    									"course"	=> 	$course
    								);
    	return view('front/coursedetails',$array);
    }
}
