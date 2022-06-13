<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lapanganUsaha;
use App\Models\pengeluaran;

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
}
