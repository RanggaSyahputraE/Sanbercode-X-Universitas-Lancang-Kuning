<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/welcome', [AuthController::class, 'welcome']);
Route::resource('cast', CastController::class);

route::get('/master', function(){
    return view('layout.master');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/table', function () {
    return view('halaman.table');
})->name('table');

Route::get('/data-tables', function () {
    return view('halaman.datatable');
})->name('data-tables');