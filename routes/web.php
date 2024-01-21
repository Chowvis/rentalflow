<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\expensescontroller;
use App\Http\Controllers\homepagecontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\propertiescontroller;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\rentcontroller;
use App\Http\Controllers\settingscontroller;
use App\Http\Controllers\signincontroller;
use App\Http\Controllers\skeletoncontroller;
use App\Http\Controllers\storecontroller;
use App\Http\Controllers\tenantcontroller;
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
// Route::post('skeleton',[skeletoncontroller::class,'logged'])->middleware('auth')->name('loggedin');

// after login routes--->>>>
Route::get('/dashboard',[dashboardcontroller::class,'gotodashboard'])->middleware('auth')->name('dashboard');
Route::get('/properties',[propertiescontroller::class,'gotoproperties'])->name('properties');
Route::get('/tenants',[tenantcontroller::class,'gototenants'])->name('tenants');
Route::get('/rent',[rentcontroller::class,'gotorent'])->name('rent');
Route::get('/expenses',[expensescontroller::class,'gotoexpenses'])->name('expenses');
Route::get('/settings',[settingscontroller::class,'gotosettings'])->name('settings');

//<<<-----
