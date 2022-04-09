<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class AuthController extends Controller
{
   
    public function listAll(){
        return view('admin.users.list_users');
    }

    public function showLogin(){
        return view('admin.login');
        if(Auth::check())
        return redirect()->route($this->checkRole());
        else 
        return view('admin.login');
    }

    public function login(Request $request){
        return request();
       // if(Auth::attempt(['email'=>$request->email_username,'password'=>$request->user_pass,'is_active'=>1])){
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->pass])){

            
            if(Auth::user()->hasRole('admin'))
            return redirect()->route('listjobs');
            else 
            return redirect()->route('index');

        
        }
        else {
            return redirect()->route('login')->with(['message'=>'incorerct username or password or your account is not active ']);
        }


      /*  echo $request->input('email_username');
        echo "<br>";
        echo $request->has('user_pass');*/

        /*print_r($request->input());
        echo "<br>";
        echo $request->has('user_pass');
        echo"<br>";
        if(!$request->filled('user_pass')) echo "empty data";
        //$request->file('profile_image');
      $request->hasFile('profile_image');
        
        //echo $request->email_username;
        //print_r($request->input());
        */

    }

    public function createUser(){
        return view('admin.users.create');
    }

    public function register(Request $request){

        Validator::validate($request->all(),[
            'full_name'=>['required','min:3','max:10'],
            'u_email'=>['required','email','unique:users,email'],
            'user_pass'=>['required','min:5'],
            'confirm_pass'=>['same:user_pass']


        ],[
            'full_name.required'=>'this field is required',
            'full_name.min'=>'can not be less than 3 letters', 
            'u_email.unique'=>'there is an email in the table',
            'u_email.required'=>'this field is required',
            'u_email.email'=>'incorrect email format',
            'user_pass.required'=>'password is required',
            'user_pass.min'=>'password should not be less than 3',
            'confirm_pass.same'=>'password dont match',


        ]);

        $u=new User();
        $u->name=$request->full_name;
        $u->password=Hash::make($request->user_pass);
        $u->email=$request->u_email;
        if($u->save())
        return redirect()->route('home')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
    public function resetPassword(){

    }
    public function logout(){

        Auth::logout();
        return redirect()->route('login');

    }

    public function checkRole(){
        if(Auth::user()->hasRole('admin'))
        return 'listjobs';
            else 
            return 'index';
        
    }




}
