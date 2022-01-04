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

Route::group(['prefix'=>'/contact','middleware'=>['guard']],function()
{
    Route::view('/add',[ContactController::class,'contact/add']);
    Route::post('/addContact',[ContactController::class,'addContact']);
    Route::get('/contactList',[ContactController::class,'contactList']);
    Route::get('/detail/{id}',[ContactController::class,'detail']);
    Route::get('/delete/{id}',[ContactController::class,'delete']);
    Route::post('/search',[ContactController::class,'search']);
    Route::get('/edit/{id}',[ContactController::class,'edit']);
    Route::post('/updateContact/{id}',[ContactController::class,'updateContact']);

    Route::get('/favourite',[ContactController::class,'favouriteList']);
    Route::get('/unfavourite/{id}',[ContactController::class,'unfavourite']);
    Route::get('/favourite/{id}',[ContactController::class,'addToFavourite']);
});





