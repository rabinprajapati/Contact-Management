<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});
Route::view('/register','register');
Route::view('/login','login');
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);

Route::view('/add',[ContactController::class,'contact/add'])->middleware('guard');
Route::post('/addContact',[ContactController::class,'addContact'])->middleware('guard');
Route::get('/contactList',[ContactController::class,'contactList'])->middleware('guard');
Route::get('/detail/{id}',[ContactController::class,'detail'])->middleware('guard');
Route::get('/delete/{id}',[ContactController::class,'delete'])->middleware('guard');
Route::post('/search',[ContactController::class,'search'])->middleware('guard');
Route::get('/edit/{id}',[ContactController::class,'edit'])->middleware('guard');
Route::post('/updateContact/{id}',[ContactController::class,'updateContact'])->middleware('guard');




