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
Route::get('/findMax5',[\App\Http\Controllers\Test1::class,'findMax5'])->name('findMax5');
Route::get('/findFrequent',[\App\Http\Controllers\Test1::class,'findFrequent'])->name('findFrequent');
