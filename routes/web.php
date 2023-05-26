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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [App\Http\Controllers\IndexController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/upload', [App\Http\Controllers\HomeController::class, 'upload'])->name('upload');

//Route::get('/progress', function () {
//    if (Session::has('upload_progress')) {
//        $progress = Session::get('upload_progress');
//        return response()->json(['progress' => $progress]);
//    } else {
//        return response()->json(['progress' => 0]);
//    }
//})->name('progress');
