<?php

use App\Http\Controllers\homepagecontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\signincontroller;
use App\Http\Controllers\storecontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controllers\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[homepagecontroller::class,'home'])->name('homepage');

Route::get('/signup',[registrationcontroller::class,'signup'])->name('signuppage');
Route::post('/store',[storecontroller::class,'store'])->name('store');

Route::get('/signin',[signincontroller::class,'signin'])->name('signin');
// Route::post('/login',[logincontroller::class,'login'])->middleware('auth')->name('login');

Route::post('loggedin',[logincontroller::class,'login'])->name('login');
