<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('detail/{id}',[App\Http\Controllers\IndexController::class, 'show'] );
Route::get('/berhasil', [App\Http\Controllers\IndexController::class, 'berhasil']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard');
    } )->name('admindashboard');
    Route::resource('events', EventController::class);
    Route::get('/applicants', [App\Http\Controllers\ApplicantController::class, 'index']);

});

Route::post('/daftar', [App\Http\Controllers\ApplicantController::class, 'store']);
Route::middleware(['role:user'])->group(function () {
    Route::get('/userpanel', function () {
        return view('pages.user.dashboard');
    } )->name('userdashboard');
});

