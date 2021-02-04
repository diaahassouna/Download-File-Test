<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\test;

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

//This route make the page visible
Route::get('/', function () {
    return view('test');
});

//This route makes the file 'test.txt' downloadable 
Route::get('/test', [test::class, 'index'])->name('test.download.index');