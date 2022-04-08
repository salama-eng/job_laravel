<?php

use App\Http\Controllers\jobsController;
use App\Http\Controllers\pageContent\aboutController;
use App\Http\Controllers\pageContent\membersController;
use App\Http\Controllers\pageContent\servicesController;
use App\Http\Controllers\pageContent\sliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/detailes', function () {
    return view('detailes');
});

Route::get('/members', function () {
    return view('members');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/master', function () {
    return view('layout.master');
});


Route::get('/adminmaster', function () {
    return view('admin.layout.master');
});


Route::get('/addJob',[jobsController::class,'addJob'])->name("addJob");
Route::get('/listjobs',[jobsController::class,'listAll'])->name("listjobs");
Route::post('/storjob',[jobsController::class,'storjob'])->name("storjob");




Route::get('/admin_about',[aboutController::class,'listAll'])->name("admin_about");

Route::get('/admin_member',[membersController::class,'listAll'])->name("admin_member");
Route::get('/addmember',[membersController::class,'addmember'])->name("addmember");
Route::post('/stormember',[membersController::class,'stormember'])->name("stormember");



Route::get('/admin_services',[servicesController::class,'listAll'])->name("admin_services");
Route::get('/addservice',[servicesController::class,'addservice'])->name("addservice");
Route::post('/storservice',[servicesController::class,'storservice'])->name("storservice");




Route::get('/sliders',[sliderController::class,'listAll'])->name("sliders");
Route::get('/addslider',[sliderController::class,'addslider'])->name("addslider");
Route::post('/storslider',[sliderController::class,'storslider'])->name("storslider");








