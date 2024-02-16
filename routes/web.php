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
use App\Http\Controllers\storepropertiescontroller;
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

Route::get('/signin',[signincontroller::class,'signin'])->name('login');
Route::post('/loggedin',[logincontroller::class,'login'])->name('loggedin');
Route::post('/logout',[logincontroller::class,'logout'])->name('logout');
// after login routes--->>>>


Route::get('/dashboard',[dashboardcontroller::class,'gotodashboard'])->middleware('auth')->name('dashboard');
Route::get('/edituser',[dashboardcontroller::class,'edituser'])->middleware('auth')->name('edituser');
Route::post('/updateuser/{user}',[dashboardcontroller::class,'updateuser'])->middleware('auth')->name('updateuser');
// properties
Route::get('/properties',[propertiescontroller::class,'gotoproperties'])->middleware('auth')->name('properties');
Route::get('/newproperty',[propertiescontroller::class,'addproperties'])->middleware('auth')->name('addproperty');
Route::post('/storeproperty',[propertiescontroller::class,'storeproperties'])->middleware('auth')->name('storeproperty');
Route::get('/viewproperty/{property}',[propertiescontroller::class,'show'])->middleware('auth')->name('show');
Route::get('/editproperty/{property}',[propertiescontroller::class,'editproperty'])->middleware('auth')->name('edit');
Route::post('updateproperty/{property}',[propertiescontroller::class,'updateproperty'])->middleware('auth')->name('update');
Route::get('assigntenant/{property}',[propertiescontroller::class,'gotoassigntenant'])->middleware('auth')->name('goassign');
Route::post('assignt/{property}',[propertiescontroller::class,'assigntenant'])->middleware('auth')->name('assign');

Route::get('deactive/{property}',[propertiescontroller::class,'deactivateproperty'])->middleware('auth')->name('deactivate');
Route::get('active/{property}',[propertiescontroller::class,'activateproperty'])->middleware('auth')->name('activate');
// end properties


// Tenants
Route::get('/tenants',[tenantcontroller::class,'gototenants'])->middleware('auth')->name('tenants');
Route::get('/newtenant',[tenantcontroller::class,'addtenants'])->middleware('auth')->name('addtenant');
Route::post('/storetenant',[tenantcontroller::class,'storetenants'])->middleware('auth')->name('storetenant');
Route::get('/viewtenant/{tenant}',[tenantcontroller::class,'show'])->middleware('auth')->name('showT');
Route::get('/edittenant/{tenant}',[tenantcontroller::class,'edittenant'])->middleware('auth')->name('editT');
Route::post('updatetenant/{tenant}',[tenantcontroller::class,'updatetenant'])->middleware('auth')->name('updateT');

Route::get('deactivet/{tenant}',[tenantcontroller::class,'deactivatetenant'])->middleware('auth')->name('deactivateT');
Route::get('activet/{tenant}',[tenantcontroller::class,'activatetenant'])->middleware('auth')->name('activateT');

// end tenants
Route::get('/rent',[rentcontroller::class,'gotorent'])->middleware('auth')->name('rent');
Route::get('/expenses',[expensescontroller::class,'gotoexpenses'])->middleware('auth')->name('expenses');
Route::get('/settings',[settingscontroller::class,'gotosettings'])->middleware('auth')->name('settings');

//<<<-----
