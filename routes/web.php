<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('user/index', [UserController::class, 'index'])->name('user.index');
Route::get('user/half/{user}', [UserController::class, 'showHalfView'])->name('user.half');
Route::get('user/show/firsthalf/{user}', [UserController::class, 'firstHS'])->name('user.show.firsthalf');
Route::get('user/show/secondhalf/{user}', [UserController::class, 'secondHS'])->name('user.show.secondhalf');


Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/half/{user}', [AdminController::class, 'showHalfView'])->name('admin.half');
Route::get('admin/show/firsthalf/{user}', [AdminController::class, 'firstHS'])->name('admin.show.firsthalf');
Route::get('admin/show/secondhalf/{user}', [AdminController::class, 'secondHS'])->name('admin.show.secondhalf');
Route::put('admin/show/firsthalf/{user}/update', [AdminController::class, 'firstUpdate'])->name('admin.show.firstupdate');
Route::put('admin/show/secondhalf/{user}/update', [AdminController::class, 'secondUpdate'])->name('admin.show.secondupdate');