<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Tag;
use App\Course;
use App\CourseLanguage;
use App\Section;
use App\VideoLecture;
use App\CourseTag;
use App\Seo;
use Session;
class AdminController extends Controller
{
    public function index(){
    	return view('admin/dashboard');
    }

    //CATEGORY SECTION STARTS HERE
    public function category(){
    	$category = Category::all();
    	return view('admin/category',['category' 	=> 	$category]);

    }
    public function storecategory(Request $request)
    {
        $data = $this->validate($request, [
            'cat_name'=>'required',
        ]); 
        $image = $request->file('cat_image');
	    $imageFileName = time() ."_".rand(1111,9999).'.' . $image->getClientOriginalExtension();
		    $s3 = \Storage::disk('s3');
	    $filePath = '/category/' . $imageFileName;
	    if(!$s3->put($filePath, file_get_contents($image), 'public')){
	    	Session::flash('alert-danger', 'System Failure. Please try again');
	    	return redirect('admin/category');

	    }
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
		$category->cat_image 		= 		$imageFileName;

		if($category->save())
		{
			/*$image = $request->file('cat_image');
		    $imageFileName = time() ."_".rand(1111,9999).'.' . $image->getClientOriginalExtension();
 		    $s3 = \Storage::disk('s3');
		    $filePath = '/category/' . $imageFileName;
		    if($s3->put($filePath, file_get_contents($image), 'public')){
		    	$course 					= 		Category::find($category->id);
		    	$course->cat_image 		= 		$imageFileName;
		    	$course->save();
		    }*/



			$seo 		= 	new Seo();
			if($seo->saveseo('cat_id',$category->id,$request))
			{
				Session::flash('alert-success', 'Category Added Successfully');
			}
			else{
				Session::flash('alert-warning', 'Category Added Successfully but seo has not been added.');
			}

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
			$seo 		= 	new Seo();
			if($seo->updateseo($category->seo->id,$request))
			{
				Session::flash('alert-success', 'Category Updated Successfully');
			}
			else{
				Session::flash('alert-warning', 'Category updated Successfully but seo has not been updated.');
			}			
 		}
		else{
			Session::flash('alert-danger', 'System Failure. Please try again.');
		}
		return redirect('/admin/category'); 
	}




















	//SUBCATEGORY SECTION STARTS HERE
	public function subcategory(){

		$array		= 		array(
			"is_deleted"	=> 	0,
			"is_active"		=> 	1,
								);
		$category 	= 		Category::where($array)->get();
		$limit 	= 		100;
		$subcat 	= 		SubCategory::where($array)->paginate($limit);
		return view('admin/subcategory',['subcat' 	=> 	$subcat,'category'	=> 	$category,'limit'	=> 	$limit]);

	}
	public function subcategorydetails(){
		$id 		= 	request()->segment(3);
 		$subcat 	= 	SubCategory::where('id',$id)->first();
		 
		return view('admin/subcategorydetails',['subcat' 	=> 	$subcat]);

	}
	public function addsubcategory(Request $request){
		$data = $this->validate($request, [
            'subcat_name'=>'required',
        ]); 
        $image = $request->file('subcat_image');
	    $imageFileName = time() ."_".rand(1111,9999).'.' . $image->getClientOriginalExtension();
		    $s3 = \Storage::disk('s3');
	    $filePath = '/subcategory/' . $imageFileName;
	    if(!$s3->put($filePath, file_get_contents($image), 'public')){
	    	Session::flash('alert-danger', 'System Failure. Please try again');
	    	return redirect('admin/subcategory');

	    }
 		$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($request->subcat_name)," "));
		$baseslug					=	$data;	
		$check						=	array('subcat_slug'		=>		$data);
		$j=1;
		while(SubCategory::where('subcat_slug', $data)->count())
		{				
			$data	=	$baseslug.'-'.$j;				
			$check	=	array('subcat_slug'		=>		$data);
			$j++;
		}
		$subcategory 					= 		new SubCategory();
		$subcategory->subcat_name 		= 		$request->subcat_name;
		$subcategory->subcat_details 	= 		$request->subcat_details;
 		$subcategory->subcat_slug 		= 		$data;
 		$subcategory->is_active 		= 		$request->is_active;
 		$subcategory->cat_id 			= 		$request->cat_id;
		$subcategory->subcat_image 		= 		$imageFileName;

		if($subcategory->save())
		{
			//echo $subcategory->id;
			$seo 		= 	new Seo();
			if($seo->saveseo('subcat_id',$subcategory->id,$request))
			{
				Session::flash('alert-success', 'Sub-Category Added Successfully');
			}
			else{
				Session::flash('alert-warning', 'Sub-Category Added Successfully but seo has not been added.');
			}

		}
		else{
			Session::flash('alert-danger', 'System Failure. Please try again');

		}
		return redirect('/admin/subcategorydetails/'.$subcategory->id);
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
		$courses 	= 	Course::where('is_deleted', 0)->orderBy('id', 'DESC')->paginate($limit);
		$lang 		= 	CourseLanguage::all();
		$category	= 	Category::all();
		$tags 		= 	Tag::orderBy('tag_name')->get();
		return view('admin/courses',['courses'	=>	$courses,'limit' => $limit, 'lang' => $lang, 'category' => $category,'tags'	=> 	$tags]);
	}
	public function storecourse(Request $request){
		$data = $this->validate($request, [
		    'course_name'		=>	'required',
		    'course_overview'	=>	'required',
		    'course_details'	=>	'required',
		    'course_language'	=>	'required',
		    'cat_id'			=>	'required',
		    'course_image' 		=>  'required | max:1000',

		]);

		$course 		= 	new Course();
		$course_id 		= 	$course->savecourse($request);
		if($course_id)
		{
			if(count($request->tags)){
				$course->tags()->attach($request->tags);				
			} 
			$image = $request->file('course_image');
		    $imageFileName = time() ."_".rand(1111,9999).'.' . $image->getClientOriginalExtension();
		    //echo $imageFileName;
		    $s3 = \Storage::disk('s3');
		    $filePath = '/courses/' . $imageFileName;
		    if($s3->put($filePath, file_get_contents($image), 'public')){
		    	$course 					= 		Course::find($course_id);
		    	$course->course_image 		= 		$imageFileName;
		    	$course->save();
		    }
		    $seo 		= 	new Seo();
			if($seo->saveseo('course_id',$course->id,$request))
			{
				Session::flash('alert-success', 'Course Added Successfully');
			}
			else{
				Session::flash('alert-warning', 'Course Added Successfully but seo has not been added.');
			}
 		}
		else{
			Session::flash('alert-danger', 'System Failure. Please try again');
		} 
		//echo $tag_id;
		return redirect('/admin/course/details/'.$course_id);
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
					$video_link = "https://www.youtube.com/embed/".$request->video_link[$i++]."?rel=0&vq=hd1080&iv_load_policy=3";
 					$lecture 	= 	new VideoLecture();
					$lecture->lecture_name		= 		$lecture_name;
					$lecture->section_id		= 		$request->section_id;
					$lecture->video_link		= 		$video_link;
					$lecture->save();
				}		
			}
			return redirect ('/admin/course/details/'.$request->course_id);

		}
		else{
			return redirect ('/admin/courses');
		}
	}
	public function changecoursestatus(Request $request){
		if($request->id)
		{
			$course 				= 	Course::find($request->id);
			$course->is_active 		= 	$request->is_active;
			if($course->save()){
				return 1;
			}	
			else{ 
				return 0;
			}
		}
		return 0;
	}
	public function homepagecourse(){
		$courses 			= 	Course::where(['is_deleted'=> 0 ,'is_active' => 1,'home_page_course'=>0])->get();
		$home_page_course 	= 	Course::where('home_page_course','<>','0')->orderBy('home_page_course','ASC')->get();
		return view('admin/homepagecourse',['courses'	=> $courses,'home_page_course'	=> 	$home_page_course]);
	}

	public function sethomepagecourse(Request $request){
		
		$start =  Course::where('home_page_course','<>','0')->count();
		if(count($request->home_page_course))
		{
			foreach ($request->home_page_course as $id) {
				//echo ++$start."<br>";
				$course 	= 	Course::find($id);
				$course->home_page_course = ++$start;
				$course->save();
			}
		}
		return back();
	}
	public function updatehomepagecourse(Request $request)
	{
		//echo "<pre>";
		if(count($request->data1)){
			foreach ($request->data1 as $key => $id) {
				$course 	= 	Course::find($id);
				$course->home_page_course = ++$key;
				$course->save();
			}
		}
		return 1;
	}
	public function removehomepagecourse(Request $request){
		$course 	= 	Course::find($request->id);
		$course->home_page_course = 0;
		$course->save();
		return 1;
	}











	//SEO SECTION STARTS HERE
	public function seo()
	{
 		$page_seo 	= 	Seo::where('page_name','<>',Null)->orderBy('id','DESC')->get();
 		//echo "<pre>";
 		//print_r($page_seo);
 		return view('admin/seo',['seo'	=> 	$page_seo]);
 	}
 	public function saveseo(Request $request){
 		$data = $this->validate($request, [
            'page_name'=>'required',
            'title'=>'required',
        ]);
        $seo 		= 	new Seo();
		if($seo->saveseo('page_name',$request->page_name,$request))
		{
			Session::flash('alert-success', 'SEO Added Successfully');
		}
		else{
			Session::flash('alert-warning', 'We are facing some technical issue. Please try after some time.');
		}
		return redirect('/admin/seo');
 	}
 	public function updateseo(Request $request){
 		$seo 		= 	new Seo();
		if($seo->updateseo($request->id,$request))
		{
			Session::flash('alert-success', 'SEO Updated Successfully');
		}
		else{
			Session::flash('alert-warning', 'We are facing some technical issue. Please try after some time.');
		}
		return redirect('/admin/seo');

 	}












 	//AJAX SECTION STARTS HERE
 	public function getsubcategory(Request $request){
 		echo $request->id;
 		$array 	= 	array(
 							"is_active" 	=> 		1,
 							"is_deleted" 	=> 		0,
 						);
 		$subcat 	= 	SubCategory::where($array)->get()->toArray();
 		return json_encode($subcat);

 	}

}

