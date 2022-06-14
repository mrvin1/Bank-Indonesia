<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lapanganUsaha;
use App\Models\pengeluaran;
use DB;
use Session;

class ProfilWilayahKerjaController extends Controller
{
    public function viewMenu(){
        return view('menuProfilWilayah');
    }
    public function viewDiagramlu(){
        $lu=lapanganUsaha::all();
        return view('profilWilayahDiagramLU',['lu'=>$lu]);
    }
    public function viewDiagramPengeluaran(){
        $pengeluaran=pengeluaran::all();
        return view('profilWilayahDiagramPengeluaran',['pengeluaran'=>$pengeluaran]);
    }
    public function updatelu(Request $req){
		$lu=$req->validate([
            'wil' => ['required'],
            'pengolahan' => ['required'],
            'perdagangan' => ['required'],
            'pertanian' => ['required'],
            'konstruksi'=>['required'],
        ]);
        $lapanganusaha = lapanganUsaha::updateOrCreate(
            ['wilayah' => $lu['wil']], 
                ['industripengolahan'=>$lu['pengolahan'],'perdagangan'=>$lu['perdagangan'],'pertanian'=>$lu['pertanian'],'konstruksi'=>$lu['konstruksi']]
        );
        //$lapanganusaha= DB::table('lapanganusaha')->where('wilayah',$lu['wil'])->update(['industripengolahan'=>$lu['pengolahan'],'perdagangan'=>$lu['perdagangan'],'pertanian'=>$lu['pertanian'],'konstruksi'=>$lu['konstruksi']]);
        Session::flash('sukses','Data Berhasil Dimasukkan!');
        return redirect()->back();
    }

    public function updatePengeluaran(Request $req){
		$pengeluaran=$req->validate([
            'wila' => ['required'],
            'rt' => ['required'],
            'lnprt' => ['required'],
            'pemerintah' => ['required'],
            'bruto'=>['required'],
            'inventori'=>['required'],
            'bj'=>['required'],
            'pdrb'=>['required'],
        ]);
        $pengeluaran = pengeluaran::updateOrCreate(
            ['wilayah' => $pengeluaran['wila']], 
            ['rumahtangga'=>$pengeluaran['rt'],'lnprt'=>$pengeluaran['lnprt'],'pemerintah'=>$pengeluaran['pemerintah'],'bruto'=>$pengeluaran['bruto'],'inventori'=>$pengeluaran['inventori'],'eksporbarangjasa'=>$pengeluaran['bj'],'pdrb'=>$pengeluaran['pdrb']]
        );
        //$lapanganusaha= DB::table('pengeluaran')->where('wilayah',$pengeluaran['wila'])->update(['rumahtangga'=>$pengeluaran['rt'],'lnprt'=>$pengeluaran['lnprt'],'pemerintah'=>$pengeluaran['pemerintah'],'bruto'=>$pengeluaran['bruto'],'inventori'=>$pengeluaran['inventori'],'eksporbarangjasa'=>$pengeluaran['bj'],'pdrb'=>$pengeluaran['pdrb']]);
        Session::flash('sukses','Data Berhasil Dimasukkan!');
        return redirect()->back();
    }
}
