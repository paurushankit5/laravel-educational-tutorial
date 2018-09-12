<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\SEO;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array      =   array(
                                "is_active"      =>  1,
                                "is_deleted"     =>  0,
                            );
        $newcourses = Course::where([['is_active',1],["is_deleted" , 0]])->get(); 
        $seo        =  new Seo;
        $page_seo   =   $seo->getseo("page_name","homepage");
        //echo "<pre>";
        //print_r($page_seo);
        //echo count($page_seo);
        return view('front/index',['newcourses'    =>  $newcourses,'seo' => $page_seo]);
    }
    public function userrolecheck(){
        if (Auth::check() && Auth::user()->is_superuser)
        {
            return redirect ('/admin');
        }
        else if (Auth::check() && Auth::user()->is_trainer)
        {
            return redirect ('/dashboard');
        }
        else{
            return redirect ('/home');
        }       
    }
}
