<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Course;
use App\CourseLanguage;
use App\Section;
use App\VideoLecture;
use Session;
class AdminController extends Controller
{
    public function index(){
    	return view('admin/dashboard');
    }

    //CATEGORY SECTION STARTS HERE
    public function category(){
    	$category = Category::all()->toArray();
    	return view('admin/category',['category' 	=> 	$category]);

    }
    public function storecategory(Request $request)
    {
        $data = $this->validate($request, [
            'cat_name'=>'required',
        ]); 
 		$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($request->cat_name)," "));
		$baseslug					=	$data;	
		$check						=	array('cat_slug'		=>		$data);
		$j=1;
		while(Category::where('cat_slug', $data)->count())
		{				
			$data	=	$baseslug.'-'.$j;				
			$check	=	array('cat_slug'		=>		$data);
			$j++;
		}
		$category 					= 		new Category();
		$category->cat_name 		= 		$request->cat_name;
		$category->cat_details 		= 		$request->cat_details;
		$category->fa_icon 			= 		$request->fa_icon;
		$category->cat_slug 		= 		$data;
		$category->save();
		if($category)
		{
			Session::flash('alert-success', 'Category Added Successfully');

		}
		else{
			Session::flash('alert-danger', 'System Failure. Please try again');

		}
		return redirect('/admin/category');
    }
    public function updatecategory(Request $request){
		$data = $this->validate($request, [
		            'cat_name'=>'required',
		]);   
		$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($request->cat_name)," "));
		$baseslug					=	$data;	
		$check						=	array('cat_slug'		=>		$data);
		$j=1;
		while(Category::where([['cat_slug', $data],['id' ,'<>', $request->id]])->count())
		{				
			$data	=	$baseslug.'-'.$j;				
			$check	=	array('cat_slug'		=>		$data);
			$j++;
		}
		$category 					= 		Category::where('id',$request->id)->first();
		$category->cat_name 		= 		$request->cat_name;
		$category->cat_details 		= 		$request->cat_details;
		$category->fa_icon 			= 		$request->fa_icon;
		$category->cat_slug 		= 		$data;
		$category->save();
		if($category)
		{
			Session::flash('alert-success', 'Category updated Successfully.');
		}
		else{
			Session::flash('alert-danger', 'System Failure. Please try again.');
		}
		return redirect('/admin/category'); 
	}

	//TAG SECTION STARTS HERE
	public function tags(){
		$limit = 100;
		$tags = Tag::where('is_deleted', 0)->orderBy('tag_name', 'ASC')->paginate($limit);
		return view('admin/tags',['tags'	=>	$tags,'limit' => $limit]);

	}
	public function addtags(Request $request){
		 $data = $this->validate($request, [
            'tag_name'=>'required',
        ]);
		$tag 		= 	new Tag();
		$tag_id 	= 	$tag->savetag($request->tag_name);
		if($tag_id === 'exists')
		{
			Session::flash('alert-warning', 'This tag already exists');
		}
		else if ($tag_id == 0){
			Session::flash('alert-danger', 'System Failure. Please try again');
		}
		else{
			Session::flash('alert-success', 'Tag added successfully');
		}
		//echo $tag_id;
		return redirect('/admin/tags');
	}
	public function updatetag(Request $request){
		 $data = $this->validate($request, [
            'tag_name'=>'required',
        ]);
		$tag 		= 	new Tag();
		$tag_id 	= 	$tag->updatetag($request->tag_name,$request->id);
		if($tag_id === 'exists')
		{
			Session::flash('alert-warning', 'This new tag name already exists in the database');
		}
		else if ($tag_id == 0){
			Session::flash('alert-danger', 'System Failure. Please try again');
		}
		else{
			Session::flash('alert-success', 'Tag updated successfully');
		}
		//echo $tag_id;
		return redirect('/admin/tags');
	}




	// COURSE SECTION STARTS HERE
	public function courses(){
		$limit 		= 	100;
		$courses 	= 	Course::where('is_deleted', 0)->orderBy('id', 'ASC')->paginate($limit);
		$lang 		= 	CourseLanguage::all();
		$category	= 	Category::all();
		/*echo "<pre>";
		foreach ($courses as $course) {
			print_r($course->category1->cat_name);
			print_r($course->cat_id);
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
		}*/
		//print_r($courses->category());
		//print_r($lang);
		//exit();
		return view('admin/courses',['courses'	=>	$courses,'limit' => $limit, 'lang' => $lang, 'category' => $category]);
	}
	public function storecourse(Request $request){
		$data = $this->validate($request, [
		    'course_name'		=>	'required',
		    'course_overview'	=>	'required',
		    'course_details'	=>	'required',
		    'course_language'	=>	'required',
		    'cat_id'			=>	'required',
		]);
		$course 		= 	new Course();
		$course_id 		= 	$course->savecourse($request);
		if($course_id)
		{
			Session::flash('alert-success', 'Course added succesfully.');
		}
		else{
			Session::flash('alert-danger', 'System Failure. Please try again');
		} 
		//echo $tag_id;
		return redirect('/admin/courses');
	}
	public function coursedetails(Request $request){
		$id =  request()->segment(4);
		
		if(count($course  = Course::find($id)))
		{
			return view('admin/coursedetails',['course' => $course]);
		}
		else{
			return redirect('/admin/courses');
		}
	}

	public function storesection(Request $request){
		//echo "<prE>";
		if(count($request->section_name))
		{
			foreach ($request->section_name as $section_name) {
				if ($section_name != '')
				{
					$section 	= 	new Section();
					$section->section_name		= 		$section_name;
					$section->course_id			= 		$request->course_id;
					$section->save();
				}		
			}
			return redirect ('/admin/course/details/'.$request->course_id);

		}
		else{
			return redirect ('/admin/courses');
		}
	}
	public function storelecture(Request $request){
		
		if(count($request->lecture_name))
		{
			$i=0;
			foreach ($request->lecture_name as $lecture_name) {
				if ($lecture_name != '')
				{
					$lecture 	= 	new VideoLecture();
					$lecture->lecture_name		= 		$lecture_name;
					$lecture->section_id		= 		$request->section_id;
					$lecture->video_link		= 		$request->video_link[$i++];
					$lecture->save();
				}		
			}
			return redirect ('/admin/course/details/'.$request->course_id);

		}
		else{
			return redirect ('/admin/courses');
		}
	}


}

