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
Route::post('/addaccount', [App\Http\Controllers\AccountManagementController::class, 'addAccountPost'])->name('addAccountPost')->middleware('admin');
Route::get('/editaccount/{idx}', [App\Http\Controllers\AccountManagementController::class, 'editAccount'])->name('editAccount')->middleware('admin');
Route::delete('/delaccount/{idx}', [App\Http\Controllers\AccountManagementController::class, 'delAccount'])->name('delAccount')->middleware('admin');
Route::get('/changepassword', [App\Http\Controllers\AccountManagementController::class, 'changePassword'])->name('changePassword')->middleware('user');
Route::get('/listiku', [App\Http\Controllers\IKUController::class, 'listIKU'])->name('listIKU')->middleware('user');
Route::get('/addiku', [App\Http\Controllers\IKUController::class, 'addIKU'])->name('addIKU')->middleware('user');
Route::get('/detailiku/{idx}', [App\Http\Controllers\IKUController::class, 'detailIKU'])->name('detailIKU')->middleware('user');
Route::get('/editiku/{idx}', [App\Http\Controllers\IKUController::class, 'editIKU'])->name('editIKU')->middleware('user');
Route::get('/coe', [App\Http\Controllers\COEController::class, 'index'])->name('viewCOE')->middleware('user');
Route::get('/addcoe', [App\Http\Controllers\COEController::class, 'addCOE'])->name('addCOE')->middleware('user');
Route::get('/detailcoe/{idx}', [App\Http\Controllers\COEController::class, 'detailCOE'])->name('detailCOE')->middleware('user');
Route::get('/editcoe/{idx}', [App\Http\Controllers\COEController::class, 'editCOE'])->name('editCOE')->middleware('user');
Route::get('/bebarengan', [App\Http\Controllers\BebarenganController::class, 'viewBebarengan'])->name('viewBebarengan')->middleware('user');
Route::get('/addbebarengan', [App\Http\Controllers\BebarenganController::class, 'addBebarengan'])->name('addBebarengan')->middleware('user');
Route::get('/detailbebarengan/{idx}', [App\Http\Controllers\BebarenganController::class, 'detailBebarengan'])->name('detailBebarengan')->middleware('user');
Route::get('/editbebarengan/{idx}', [App\Http\Controllers\BebarenganController::class, 'editBebarengan'])->name('editBebarengan')->middleware('user');
Route::get('/menukpw', [App\Http\Controllers\ProfilKpwController::class, 'viewMenu'])->name('viewMenuKpw')->middleware('user');
Route::get('/menuwil', [App\Http\Controllers\ProfilWilayahKerjaController::class, 'viewMenu'])->name('viewMenuWil')->middleware('user');