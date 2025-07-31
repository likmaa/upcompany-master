<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //

    public function uploadFile(Request $request)
    {

    	if ($request->hasFile('image')) {
    		
    		$fileUpload = $request->file('image');

        $fileName = $fileUpload->getClientOriginalName();

        $file = File::get($fileUpload);

        $path=$this->saveFile('/blog/'.$fileName, $file);
        // $path='images/blog/'.$fileName;


	    	return ['uploaded' =>true,'path' =>$path ];
    	}

    	return ['uploaded' =>false,'path' =>"" ];
    }

    public function saveFile($name,$content)
    {
    	Storage::disk('images')->put($name,$content);

    	$path = Storage::disk('images')->url($name);
    	
    	return 'images'.$name;
    }
}
