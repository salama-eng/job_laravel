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

    
}
