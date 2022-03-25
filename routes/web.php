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
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes(['register' => false]);

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');
Route::get('/notice', [App\Http\Controllers\AnnouncementController::class, 'viewAnnouncement'])->name('notice')->middleware('user');
Route::get('/accountmanager', [App\Http\Controllers\AccountManagementController::class, 'viewList'])->name('accountManager')->middleware('admin');
Route::get('/addaccount', [App\Http\Controllers\AccountManagementController::class, 'addAccount'])->name('addAccount')->middleware('admin');
Route::get('/editaccount/{idx}', [App\Http\Controllers\AccountManagementController::class, 'editAccount'])->name('editAccount')->middleware('admin');

