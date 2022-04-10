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
            $service['image']= $filename;
        }
      else
      $service->image = 'defualt.png';
      if($service->is_active==null)
      $service->is_active=0;
      else 
      $service->is_active=1;
        $service->description=$request->description;
        $service->services_title=$request->services_title;
        if($service->save())
        return redirect()->route('admin_services')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);


    }
}
