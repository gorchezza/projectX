<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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


Route::get('user/index', [UserController::class, 'index'])->name('user.index');
Route::get('user/show/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('user/show/{user}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/show/{user}', [AdminController::class, 'show'])->name('admin.show');
Route::get('admin/show/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('admin/update/{user}', [AdminController::class, 'update'])->name('admin.update');