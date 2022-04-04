<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobsController extends Controller
{
    //
    public function listAll(){
        return view('admin.jobs.ListJob');
    }



}
