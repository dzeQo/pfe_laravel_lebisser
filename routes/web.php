<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//home page
Route::get('/' , [Homecontroller::class , 'home']);
Route::get('/detail/{slug}/{id}' , [Homecontroller::class , 'detail']);
Route::post('/save-comment/{slug}/{id}',[HomeController::class,'save_comment']);

//Admin routing 
Route::get('/admin/login' , [AdminController::class , 'login']);
Route::post('/admin/login' , [AdminController::class , 'submit_login']);
Route::get('/admin/logout' , [AdminController::class , 'logout']);
Route::get('/admin/dashboard' , [AdminController::class , 'dashboard']);



//categories routing
Route::get('admin/category/{id}/delete',[CategoryController::class , 'destroy' ]);
Route::resource('admin/category',CategoryController::class);

//Posts routing 
Route::get('admin/post/{id}/delete' , [PostController::class , 'destroy']);
Route::resource('admin/post' , PostController::class);

//setting routing 
Route::get('/admin/setting' , [SettingController::class , 'index']);
Route::post('/admin/setting' , [SettingController::class , 'save_setting']);

//contact-us routing
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'sendMail'])->name('contact.store');
Route::get('/admin/messages' , [ContactController::class , 'messages']);

//Comments Routing 
Route::get('/admin/comments' ,[AdminController::class , 'all_comments']);
Route::get('admin/comments/{id}/edit' , [AdminController::class , 'edit']);
Route::post('admin/comments/{id}' , [AdminController::class , 'update']);
Route::get('admin/comments/delete/{id}',[AdminController::class,'delete_comment']);
