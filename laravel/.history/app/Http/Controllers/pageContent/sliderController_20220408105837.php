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
}
