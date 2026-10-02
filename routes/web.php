<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookcontroller;

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

Route::get('/once_caldas', function () {
    return view('welcome');
});

Route::get('/books',[Bookcontroller::class,'index'])->name('books.index');
Route::post('/books',[Bookcontroller::class,'store'])->name('books.store');
    