<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class AdminController extends Controller
{
    public function index(){
    	return view('admin/dashboard');
    }
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
			Session::flash('alert-success', 'Category updated Successfully');

		}
		else{
			Session::flash('alert-danger', 'System Failure. Please try again');

		}
		return redirect('/admin/category'); 
	}
}

