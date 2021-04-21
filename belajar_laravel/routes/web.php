<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {return view('welcome');});
Route::get('/user',[ManagementUserController::class, 'index']);
Route::get('/create',[ManagementUserController::class, 'create']);
Route::get('/store',[ManagementUserController::class, 'store']);
Route::get('/show',[ManagementUserController::class, 'show']);
Route::get('/edit',[ManagementUserController::class, 'edit']);
Route::get('/update',[ManagementUserController::class, 'update']);
Route::get('/destroy',[ManagementUserController::class, 'destroy']);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/admin',[DashboardController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('statusAdmin');
Route::get('/error', function(){
    return view ('error');
})->name('error');
