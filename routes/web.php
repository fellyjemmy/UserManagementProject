<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users','HomeController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index1'])->name('home');
Route::get('users/deletedproducts',[HomeController::class,'getDeleteproducts'])->name('getDeleteproducts');
Route::get('users/deletedproducts/{id}',[HomeController::class,'restoreDeleteproducts'])->name('restoreDeleteproducts');
Route::get('users/restoreproducts/{id}',[HomeController::class,'deletePermanently'])->name('deletePermanently');



Auth::routes();

Route::get('/user_profile', [App\Http\Controllers\HomeController::class, 'userProfile'])->name('user_profile');





Route::resource('categories', CategoryController::class);

Route::get('users/deletedcategories',[CategoryController::class,'getDeletecategories'])->name('getDeletecategories');
Route::get('users/deletedcategories/{id}',[CategoryController::class,'restoreDeletecategories'])->name('restoreDeletecategories');
Route::get('users/restorecategories/{id}',[CategoryController::class,'deletePermanently'])->name('deletePermanently');
