<?php

namespace App\Http\Controllers\pageContent;

use App\Http\Controllers\Controller;
use App\Models\companies;

use Illuminate\Http\Request;

class membersController extends Controller
{
    public function listAll(){
        $company=companies::all();
        return view('admin.pageContent.members')->with('company', $company);
    }
    public function addmember(){
        return view('admin.pageContent.addmember');
    }

    public function stormember(Request $request){
        $data= new companies();

  
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $data['image']= $filename;
        }

        $data->name=$request->name;
        $data->email=$request->email;
        $data->is_active=$request->is_active;
        if($data->save())
        return redirect()->route('admin_member')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
    public function edit($id){
        $company=companies::find($id);
        return view('admin.pageContent.edit_member')
        ->with('company',$company);

    }

    public function update(Request $request,$company_id){
      return  $request();
        $company=companies::find($company_id);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->is_active=$request->is_active;
        if($request->hasFile('image'))
        $company->image=$this->uploadFile($request->file('image'));
        if($company->save())
        return redirect()->route('admin_member')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);



    }

}
