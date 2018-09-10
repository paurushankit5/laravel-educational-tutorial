<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all()->toArray();

        return $category;
    }
    public function catDetails(){
        $cat_slug       =      request()->segment(2);
        $where          =   array(
                                    "cat_slug"   =>      $cat_slug,
                                );
        $category       =      Category::where($where)->first();
        $array          =      array(
                                        "category"    =>  $category
                                    );
        if(!count($category))
        {
            return redirect('/');
        }
        return view('front/catdetails',$array);  
    }
   
}
