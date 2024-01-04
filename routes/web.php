<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\offcil;

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

Route::get('/', function () {
    return view('index');
});

Route::get('//offcial_transcript', function () {
    return view('/offcial_transcript');
});

Route::get('/dashboard', function () {
    return view('/dashboard');
    
});

Route::post('/store',[offcil::class,'store'])->name('send.request');
