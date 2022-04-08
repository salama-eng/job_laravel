<?php

namespace App\Http\Controllers\pageContent;
use App\Models\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function listAll(){


        $service=Services::all();
        return view('admin.pageContent.services')->with('services',$service);
    }

    public function addservice(){
        $service = new Services();
        return view('admin.pageContent.addservice');
    }

    public function storservice(Request $request)
    {
        $service = new Services();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $data['image']= $filename;
        }
      
        $service->is_active=$request->is_active;
        $service->description=$request->description;
        
    

    }
}
