<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
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
        //echo "<pre>";
        //print_r($newcourses);
        //echo count($newcourses);
        return view('front/index',['newcourses'    =>  $newcourses]);
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
