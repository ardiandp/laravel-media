<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public  function dropzoneUi()  
    {  
        return view('dropzone-file-upload');  
    }  

    public  function dropzoneFileUpload(Request $request)  
    {  
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension(); 
        $image->move(public_path('images'),$imageName);  

        return response()->json(['success'=>$imageName]);
    }
}
