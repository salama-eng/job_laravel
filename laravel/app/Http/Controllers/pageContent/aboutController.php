<?php

namespace App\Http\Controllers\pageContent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
        public function listAll(){
        return view('admin.pageContent.about');
    }

}
