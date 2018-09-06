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
        $newcourses = Course::all(); 
        /*if(auth()->user()->is_superuser == 1)
        {
            return redirect('/admin');
        }
        else if(auth()->user()->is_trainer == 1)
        {
            return redirect('/admin');
        }*/
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
