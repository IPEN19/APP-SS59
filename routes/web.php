<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekammedikController;
use App\Http\Controllers\RuangController;

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
    return view('layouts.master');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth') ->group(function (){
    //manajemen ruang
    Route::get('/ruang', [RuangController::class,'index']);
    Route::get('/ruang/form', [RuangController::class,'create']);
    Route::post('/ruang', [RuangController::class,'store']);
    Route::get('/ruang/edit/{id}', [RuangController::class,'edit']);
    Route::put('/ruang/{id}', [RuangController::class,'update']);
    Route::delete('/ruang/{id}', [RuangController::class,'destroy']);

    //manajemen rekammedik
    Route::get('/rekammedik', [RekammedikController::class,'index']);
    Route::get('/rekammedik/form', [RekammedikController::class,'create']);
    Route::post('/rekammedik', [RekammedikController::class,'store']);
    Route::get('/rekammedik/edit/{id}', [RekammedikController::class,'edit']);
    Route::put('/rekammedik/{id}', [RekammedikController::class,'update']);
    Route::delete('/rekammedik/{id}', [RekammedikController::class,'destroy']);
});