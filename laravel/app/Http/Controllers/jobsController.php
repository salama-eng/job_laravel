<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\jobs;

class jobsController extends Controller
{
   
    public function listAll(){
        $company=companies::all();
        $job=jobs::all();
        $all=array($company,$job);
        return response($company);
        return view('admin.jobs.ListJob');
    }

    public function addJob(){
          $company=companies::all();
        //   return response($company);
        return view('admin.jobs.addJob')
        ->with('company', $company);
    }

    public function storjob(Request $request){
        $job=new jobs();
        $job->jobtitle=$request->jobtitle;
        $job->description=$request->description;
        $job->country=$request->country;
        $job->shift=$request->shift;
        $job->company_id=$request->company_id;
        $job->time_start=$request->time_start;
        $job->time_close=$request->time_close;
        $job->qualifications=$request->qualifications;
        $job->respossbilities=$request->respossbilities;
      $job->steps_to_applye	=$request->steps_to_applye;
      $job->type=$request->type;
      $job->is_active=$request->is_active;
        if($job->save())
        return redirect()->route('listjobs')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create job']);
 
  }

}
