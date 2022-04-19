<?php

namespace App\Http\Controllers;
use App\Models\profilKPw;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\profilKPwImport;
use Session;
use DB;
use App\Charts\Kpwchart;

class ProfilKpwController extends Controller
{
    public function viewMenu(){
        return view('menuProfilKpw');
    }
	public function viewTable(){
		$organik=profilKPw::where('status','like','organik')->paginate(5);
		$countorganik=profilKPw::where('status','like','organik')->count();
		$nonorganik=profilKPw::where('status','like','non-organik')->paginate(5);
		$countnonorganik=profilKPw::where('status','like','non-organik')->count();
		return view('profilKpwTable', ['organik'=>$organik, 'nonorganik'=>$nonorganik, 'corganik'=>$countorganik, 'cnonorganik'=>$countnonorganik]);
	}
	public function viewDiagram(){
        $data = DB::table('profilkpw')
           ->select(
            DB::raw('status as status'),
            DB::raw('count(*) as number'))
           ->groupBy('status')
           ->get();
        $array[] = ['Status', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->status, $value->number];
        }
        return view('profilKpwDiagram')->with('course', json_encode($array));
	}
	public function insertkpw(Request $req){
		$users=$req->validate([
            'nip' => ['required','size:5'],
            'nama' => ['required','string'],
            'gender' => ['required'],
            'alamat' => ['required'],
            'dob' => ['required'],
            'stat'=>['required'],
        ]);
        $users=profilKPw::create([
            'nip' => $users['nip'],
            'nama'=>$users['nama'],
            'jeniskelamin'=>$users['gender'],
            'alamat'=>$users['alamat'],
			'tanggallahir'=>$users['dob'],
            'status'=>$users['stat'],
        ]);
        $users->save();
		Session::flash('sukses','Data Berhasil Dimasukkan!');
        return redirect()->back();
		
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
 
		// upload ke foldera di dalam folder public
		$file->move('importfile',$nama_file);
		
		profilKPw::truncate();

		// import data
		Excel::import(new profilKPwImport, public_path('/importfile/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Berhasil Diimport!');
 
		return redirect('/menukpw');
	}
}
