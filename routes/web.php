<?php

use App\Http\Controllers\studentcontroller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/contact', function () {
//     return view('welcome');
// });
//  Route::get('/aman', function(){
//     return "hello rameeza";
//  });

//  Route::get('/about/{id}/{name?}', function(int $id, string $name= null){
//     return view('about')->with(['id' => $id, 'name' => $name]);
//  });
Route::get('/', [studentcontroller::class, 'index']);
Route::get('/about', [studentcontroller::class, 'about']);
Route::get('/registration', [studentcontroller::class, 'registration']);
Route::post('/registration', [studentcontroller::class, 'create']);
Route::get('/std/view', [studentcontroller::class, 'std_view']);
Route::get('/std/dlt/{id}', [studentcontroller::class, 'Delete'])->name
('std_del');
Route::get('/std/edit/{id}', [studentcontroller::class, 'Edit'])->name
('std_edit');
Route::post('/std/update/{id}', [studentcontroller::class, 'update'])->name
('std_update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
