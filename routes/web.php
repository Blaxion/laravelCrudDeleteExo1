<?php

use App\Http\Controllers\MembreController;
use App\Models\membre;
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

Route::get('/',[MembreController::class,'index']);
Route::get('/createmembre',[MembreController::class,'create']);
Route::post('/postmembre',[MembreController::class,'store']);
Route::delete('/deletemembre/{id}',[MembreController::class,'destroy']);



Route::get('/hommes', function () {
    $membres = membre::all();
    return view('pages.hommes',compact('membres'));
});


Route::get('/femmes', function () {
    $membres = membre::all();
    return view('pages.femmes',compact('membres'));
});


