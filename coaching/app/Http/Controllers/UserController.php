<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
    	if(auth()->user()->is_trainer){
    		return view('trainer.index');
    	}
    	else{
    		echo " i am a learner";
    	}
    }
}
