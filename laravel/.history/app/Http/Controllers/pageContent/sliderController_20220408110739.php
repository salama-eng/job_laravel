<?php

namespace App\Http\Controllers\pageContent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;


class sliderController extends Controller
{
    public function listAll(){
               
        $slider=slider::all();
        
        return view('admin.pageContent.sliders')->with('slider', $slider);
    }
    public function addslider(){
        $slider = new slider();
        return view('admin.pageContent.addslider');
    }

    public function storslider(Request $request)
    {
        $slider = new slider();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $slider['image']= $filename;
        }
      else
      $slider->image = 'defualt.png';
        $slider->is_active=$request->is_active;
        $slider->description=$request->description;
        $slider->slider_title=$request->slider_title;
        if($slider->save())
        return redirect()->route('sliders')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);


    }
}
