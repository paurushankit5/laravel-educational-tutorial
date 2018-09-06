<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;

class TrainerController extends Controller
{
    public function mycourses(){
    	return view ('trainer.upload');
    }

    public function addcourse(){
    	echo "addcourse";
    }

    public function uploadimage(Request $request)
	{
		echo "<pre>";
		print_r($_FILES);
	    $image = $request->file('image');
	    $imageFileName = time() . '.' . $image->getClientOriginalExtension();
	    echo $imageFileName;
	    $s3 = \Storage::disk('s3');
	    $filePath = '/test/' . $imageFileName;
	    $s3->put($filePath, file_get_contents($image), 'public');
	    //$disk-&gt;put($targetFile, fopen($sourceFile, 'r+'));

	}
}
