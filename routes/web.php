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

Route::get('getindikator/{id}',function($id){
    $indikator = App\Models\indikatorIKU::where('jenisiku',$id)->get();
    return response()->json($indikator);
})->middleware('user');


Route::get('getlu/{id}',function($id){
    $lu = App\Models\lapanganUsaha::where('wilayah',$id)->first();
    return response()->json($lu);
})->middleware('user');

Route::get('getpengeluaran/{id}',function($id){
    $lu = App\Models\pengeluaran::where('wilayah',$id)->first();
    return response()->json($lu);
})->middleware('user');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');
Route::get('/notice', [App\Http\Controllers\AnnouncementController::class, 'viewAnnouncement'])->name('notice')->middleware('user');
Route::get('/accountmanager', [App\Http\Controllers\AccountManagementController::class, 'viewList'])->name('accountManager')->middleware('admin');
Route::get('/addaccount', [App\Http\Controllers\AccountManagementController::class, 'addAccount'])->name('addAccount')->middleware('admin');
Route::post('/addaccount', [App\Http\Controllers\AccountManagementController::class, 'addAccountPost'])->name('addAccountPost')->middleware('admin');
Route::get('/editaccount/{idx}', [App\Http\Controllers\AccountManagementController::class, 'editAccount'])->name('editAccount')->middleware('admin');
Route::post('/editaccount/{idx}', [App\Http\Controllers\AccountManagementController::class, 'editAccountSave'])->name('editAccount')->middleware('admin');
Route::post('/resetpass/{idx}', [App\Http\Controllers\AccountManagementController::class, 'resetPass'])->name('resetPass')->middleware('admin');
Route::delete('/delaccount/{idx}', [App\Http\Controllers\AccountManagementController::class, 'delAccount'])->name('delAccount')->middleware('admin');
Route::get('/changepassword', [App\Http\Controllers\AccountManagementController::class, 'changePassword'])->name('changePassword')->middleware('user');
Route::post('/changepassword', [App\Http\Controllers\AccountManagementController::class, 'changePass'])->name('changePass')->middleware('user');
Route::get('/listiku', [App\Http\Controllers\IKUController::class, 'listIKU'])->name('listIKU')->middleware('user');
Route::post('/listiku', [App\Http\Controllers\IKUController::class, 'store'])->name('store')->middleware('user');
Route::get('/addiku', [App\Http\Controllers\IKUController::class, 'addIKU'])->name('addIKU')->middleware('user');
Route::post('/addiku', [App\Http\Controllers\IKUController::class, 'addIKUPOST'])->name('addIKUPOST')->middleware('user');
Route::get('/detailiku/{idx}', [App\Http\Controllers\IKUController::class, 'detailIKU'])->name('detailIKU')->middleware('user');
Route::get('/editiku/{idx}', [App\Http\Controllers\IKUController::class, 'editIKU'])->name('editIKU')->middleware('user');
Route::post('/editiku/{idx}', [App\Http\Controllers\IKUController::class, 'editIKUPost'])->name('editIKUPost')->middleware('user');
Route::delete('/deliku/{idx}', [App\Http\Controllers\IKUController::class, 'delIKU'])->name('delIKU')->middleware('user');
Route::get('/coe', [App\Http\Controllers\COEController::class, 'index'])->name('viewCOE')->middleware('user');
Route::get('/addcoe', [App\Http\Controllers\COEController::class, 'addCOE'])->name('addCOE')->middleware('user');
Route::post('/addcoe', [App\Http\Controllers\COEController::class, 'addCOEPost'])->name('addCOEPost')->middleware('user');
Route::get('/detailcoe/{idx}', [App\Http\Controllers\COEController::class, 'detailCOE'])->name('detailCOE')->middleware('user');
Route::get('/editcoe/{idx}', [App\Http\Controllers\COEController::class, 'editCOE'])->name('editCOE')->middleware('user');
Route::post('/editcoe/{idx}', [App\Http\Controllers\COEController::class, 'editCOEPost'])->name('editCOEPost')->middleware('user');
Route::get('/bebarengan', [App\Http\Controllers\BebarenganController::class, 'viewBebarengan'])->name('viewBebarengan')->middleware('user');
Route::get('/addbebarengan', [App\Http\Controllers\BebarenganController::class, 'addBebarengan'])->name('addBebarengan')->middleware('user');
Route::post('/addbebarengan', [App\Http\Controllers\BebarenganController::class, 'addBebarenganPost'])->name('addBebarenganPost')->middleware('user');
Route::get('/detailbebarengan/{idx}', [App\Http\Controllers\BebarenganController::class, 'detailBebarengan'])->name('detailBebarengan')->middleware('user');
Route::get('/editbebarengan/{idx}', [App\Http\Controllers\BebarenganController::class, 'editBebarengan'])->name('editBebarengan')->middleware('user');
Route::post('/editbebarengan/{idx}', [App\Http\Controllers\BebarenganController::class, 'editBebarenganPost'])->name('editBebarenganPost')->middleware('user');
Route::delete('/delbebarengan/{idx}', [App\Http\Controllers\BebarenganController::class, 'delBebarengan'])->name('delBebarengan')->middleware('user');
Route::get('/menukpw', [App\Http\Controllers\ProfilKpwController::class, 'viewMenu'])->name('viewMenuKpw')->middleware('user');
Route::get('/kpwtabel', [App\Http\Controllers\ProfilKpwController::class, 'viewTable'])->name('viewTableKpw')->middleware('user');
Route::get('/kpwdiagram', [App\Http\Controllers\ProfilKpwController::class, 'viewDiagram'])->name('viewDiagramKpw')->middleware('user');
Route::post('/kpwinsert', [App\Http\Controllers\ProfilKpwController::class, 'insertkpw'])->name('insertkpw')->middleware('user');

Route::get('/wildiagramlu', [App\Http\Controllers\ProfilWilayahKerjaController::class, 'viewDiagramlu'])->name('viewDiagramWillu')->middleware('user');
Route::get('/wildiagrampengeluaran', [App\Http\Controllers\ProfilWilayahKerjaController::class, 'viewDiagramPengeluaran'])->name('viewDiagramWilPengeluaran')->middleware('user');
Route::post('/updatewillu', [App\Http\Controllers\ProfilWilayahKerjaController::class, 'updatelu'])->name('updatelu')->middleware('user');
Route::post('/updatepengeluaran', [App\Http\Controllers\ProfilWilayahKerjaController::class, 'updatePengeluaran'])->name('updatePengeluaran')->middleware('user');


Route::post('/import_excel', [App\Http\Controllers\ProfilKpwController::class, 'import_excel'])->name('import_excel')->middleware('user');
Route::get('/menuwil', [App\Http\Controllers\ProfilWilayahKerjaController::class, 'viewMenu'])->name('viewMenuWil')->middleware('user');
Route::get('/exportxlsx/{tgl}', [App\Http\Controllers\ExcelController::class, 'export'])->name('exportxlsx')->middleware('user');
Route::post('full-calender/action', [App\Http\Controllers\COEController::class, 'action'])->middleware('user');


