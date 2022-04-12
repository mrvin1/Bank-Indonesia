<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilKpwController extends Controller
{
    public function viewMenu(){
        return view('menuProfilKpw');
    }
    
	public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('importfile',$nama_file);
 
		// import data
		Excel::import(new profilKPwImport, public_path('/importfile/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/menukpw');
	}
}
