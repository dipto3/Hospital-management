<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
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


Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/registration-check',[UserController::class,'registration']);
Route::post('/login-check',[UserController::class,'logincheck']);
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/',[UserController::class,'home']);


Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/home', [UserController::class,'dashboard'])->name('dashboard')->middleware('checkk');

Route::get('/doctor-list', [UserController::class,'all_doctor'])->name('alldoctor');

Route::get('/user-appointment', [UserController::class,'user_appointment'])->middleware('checkk');

Route::post('/appointment',[AppointmentController::class,'appointment']);

Route::post('/cancel-appointment/{id}',[AppointmentController::class,'cancel_appointment']);

Route::get('/contact', [ContactController::class,'showcontact']);
Route::post('/send', [ContactController::class,'send']);


Route::get('/about', [AboutController::class,'showabout']);
Route::get('/search', [UserController::class,'serach']);

Route::get('/allnews', [UserController::class,'allnews']);
Route::get('/news-details/{id}', [UserController::class,'news_details']);
//Admin...
Route::get('/adminlogout',[AdminController::class,'logout'])->name('logout');

Route::get('/profile',[UserController::class,'profile'])->name('profile')->middleware('checkk');


Route::get('/showappointment',[AdminController::class,'showappointment'])->middleware('checkk');
Route::post('/approved/{id}',[AdminController::class,'approved']);
Route::post('/cancelled/{id}',[AdminController::class,'cancelled']);

// Category
Route::get('/add-category',[CategoryController::class,'add'])->middleware('checkk');
Route::post('/add-category/check',[CategoryController::class,'store']);
Route::get('/edit-category',[CategoryController::class,'edit'])->middleware('checkk');
Route::get('/edit-category/{id}',[CategoryController::class,'updateview'])->middleware('checkk');
Route::post('/edit-category/check/{id}',[CategoryController::class,'update']);
Route::post('/edit-delete/{id}',[CategoryController::class,'destroy']);

// Doctor
Route::get('/add-doctor',[DoctorController::class,'add'])->middleware('checkk');
Route::get('/all-doctor',[DoctorController::class,'index'])->middleware('checkk');
Route::post('/all-doctor/store',[DoctorController::class,'store']);
Route::get('/edit-doctor/{id}',[DoctorController::class,'edit'])->middleware('checkk');
Route::post('/edit-doctor/check/{id}',[DoctorController::class,'update']);
Route::post('/doctor-delete/{id}',[DoctorController::class,'destroy']);
// About
Route::get('/add-about',[AboutController::class,'create'])->middleware('checkk');
Route::post('/about-store',[AboutController::class,'store']);
Route::get('/abouts',[AboutController::class,'index'])->middleware('checkk');
Route::get('/edit-about/{id}',[AboutController::class,'edit'])->middleware('checkk');
Route::post('/about-update/{id}',[AboutController::class,'update']);
Route::post('/about-delete/{id}',[AboutController::class,'destroy']);

// News
Route::get('/add-news',[NewsController::class,'create'])->middleware('checkk');
Route::post('/news-store',[NewsController::class,'store'])->middleware('checkk');
Route::get('/news',[NewsController::class,'index']);
Route::get('/edit-news/{id}',[NewsController::class,'edit'])->middleware('checkk');
Route::post('/news-update/{id}',[NewsController::class,'update']);
Route::post('/news-delete/{id}',[NewsController::class,'destroy']);

