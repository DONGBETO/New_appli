<?php

use App\Http\Controllers\filmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\photoController;

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

Route::get('article/{n}', function ($n) {
    return view('article',['numero'=>$n]);
})->where('n','[0-9]');


Route::get('users',[userController::class,'create']);
Route::post('users',[userController::class,'store']);

Route::get('photos',[photoController::class,'create']);
Route::post('photos',[photoController::class,'store']);
Route::get('photos/message',[photoController::class,'message']);

Route::get('films',[filmController::class,'create'])->name('index');
Route::get('films/show/{id}',[filmController::class,'show'])->name('voir');
Route::post('films/delete/{film}',[filmController::class,'delete'])->name('supprimer');
Route::post('films/new',[filmController::class,'store'])->name('ajouter');