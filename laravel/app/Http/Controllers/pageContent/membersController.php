<?php

namespace App\Http\Controllers\pageContent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class membersController extends Controller
{
    public function listAll(){
        return view('admin.pageContent.members');
    }
}
