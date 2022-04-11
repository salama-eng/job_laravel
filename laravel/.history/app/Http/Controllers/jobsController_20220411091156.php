<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\jobs;

class jobsController extends Controller
{
   
    public function listAll(){
     //   $company=companies::all();
       // $job=jobs::all();
     //   $company=companies::with(['jobs'])->get();
        $jobs=jobs::with(['companies'])->get();
        
// return response($jobs);
        return view('admin.jobs.ListJob')->with('jobs', $jobs);
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


  public function edit($id){

    $jobs=jobs::with(['companies'])->find($id);
    $comp=companies::all();
    // return response($jobs);
            return view('admin.jobs.edit_job',compact('jobs', 'comp'));
}

public function update(Request $request,$job_id){
 // return  $request();
    $job=jobs::find($job_id);
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
   if($job->is_active==null)
    $job->is_active=0;
    else 
    $job->is_active=1;
    $job->is_active=$request->is_active;
    if($request->hasFile('image'))
    $job->image=$this->uploadFile($request->file('image'));
    if($job->save())
    return redirect()->route('listjobs')
    ->with(['success'=>'user created successful']);
    return back()->with(['error'=>'can not create job']);



}

public function toggle($job_id){

    $job=jobs::find($job_id);
   
    if($job->is_active==0)
    $job->is_active=1;
    else 
    $job->is_active=0;
    if($job->save())
    return back()->with(['success'=>'data updated successful']);
    return back()->with(['error'=>'can not update data']);

}



}
