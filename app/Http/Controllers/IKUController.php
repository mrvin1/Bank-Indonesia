<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IKU;
use App\Models\indikatorIKU;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IKUController extends Controller
{
    public function listIKU(){
        $iku=IKU::join('indikatorIKU','indikatorIKU.id','=', 'indikator')->paginate(3);
        return view('listIKU',['iku'=>$iku]);
    }
    public function searchIKU(Request $req)
    {
        if($req['cari']==null&&$req['jenisiku']==null){ //cari periode
            $tgl = new Carbon($req['tgl']);
            $iku=IKU::join('indikatorIKU','indikatorIKU.id','=', 'indikator')->whereMonth('periode','=',$tgl->month)->whereYear('periode','=',$tgl->year)->paginate(3);
            return view('listIKU',['iku'=>$iku]);
        }
        elseif ($req['jenisiku']==null){ //cari periode+search
            $tgl = new Carbon($req['tgl']);
            $query = $req['cari'];
            $iku=IKU::join('indikatorIKU','indikatorIKU.id','=', 'indikator')->whereMonth('periode','=',$tgl->month)->whereYear('periode','=',$tgl->year)->where('indikatordesc','like',"%$query%")->paginate(3);
            return view('listIKU',['iku'=>$iku]);
        }
        elseif($req['jenisiku']!=null&&$req['cari']!=null&&$req['tgl']!=null){ //cari semua
            $tgl = new Carbon($req['tgl']);
            $query = $req['cari'];
            $jenis = $req['jenisiku'];
            $iku=IKU::join('indikatorIKU','indikatorIKU.id','=', 'indikator')->whereMonth('periode','=',$tgl->month)->whereYear('periode','=',$tgl->year)->where('jenisiku','=',$jenis)->where('indikatordesc','like',"%$query%")->paginate(3);
            return view('listIKU',['iku'=>$iku]);
        }
        elseif($req['cari']==null&&$req['tgl']==null){ // cari jenis doang
            $jenis = $req['jenisiku'];
            $iku=IKU::join('indikatorIKU','indikatorIKU.id','=', 'indikator')->where('jenisiku','=',$jenis)->paginate(3);
            return view('listIKU',['iku'=>$iku]);
        }
        elseif($req['cari']==null){ // cari jenis dan periode
            $jenis = $req['jenisiku'];
            $tgl = new Carbon($req['tgl']);
            $iku=IKU::join('indikatorIKU','indikatorIKU.id','=', 'indikator')->whereMonth('periode','=',$tgl->month)->whereYear('periode','=',$tgl->year)->where('jenisiku','=',$jenis)->paginate(3);
            return view('listIKU',['iku'=>$iku]);
        }
        elseif($req['tgl']==null){ //search sama jenis
            $query = $req['cari'];
            $jenis = $req['jenisiku'];
            $iku=IKU::join('indikatorIKU','indikatorIKU.id','=', 'indikator')->where('indikatordesc','like',"%$query%")->where('jenisiku','=',$jenis)->paginate(3);
            return view('listIKU',['iku'=>$iku]);
        }
        else{
            redirect()->back();
        }
    }
    public function addIKU(){
        $indikator = indikatorIKU::all();
        return view('addIKU',['indikator'=>$indikator]);
    }
    public function addIKUPost(Request $req){
        $iku=$req->validate([
            'periode' => ['required'],
            'jenisiku' => ['required'],
            'indikator' => ['required'],
            'realisasi' => ['required'],
            'track' => ['required'],
            'ket'=>['required'],
        ]);
        $iku=IKU::create([
            'periode' => $iku['periode'],
            'indikator'=>$iku['indikator'],
            'realisasi'=>$iku['realisasi'],
            'status'=>$iku['track'],
            'keterangan'=>$iku['ket'],
        ]);
        $iku->save();
        return redirect('listiku');
    }
    public function delIKU($idx){
        $iku=IKU::where('ikuid','=',$idx);
        $iku->delete();
        return redirect()->back();
    }
    public function detailIKU($idx){
        $iku=IKU::where('ikuid','=',$idx)->first();
        $jenis=IKU::join('indikatoriku','indikatoriku.id','=','ikus.indikator')->join('jenisiku','jenisiku.id','=','indikatoriku.jenisiku')->where('ikuid','=',$idx)->first();  
        return view('detailIKU',['iku'=>$iku, 'jenis'=>$jenis]);
    }
    public function editIKU($idx){
        $iku=IKU::where('ikuid','=',$idx)->first();
        $jenis=IKU::join('indikatoriku','indikatoriku.id','=','ikus.indikator')->join('jenisiku','jenisiku.id','=','indikatoriku.jenisiku')->where('ikuid','=',$idx)->first();  
        return view('editIKU',['iku'=>$iku, 'jenis'=>$jenis]);
    }
    public function editIKUPost($idx, Request $req){
        $iku=$req->validate([
            'periode' => ['required'],
            'jenisiku' => ['required'],
            'indikator' => ['required'],
            'realisasi' => ['required'],
            'track' => ['required'],
            'ket'=>['required'],
        ]);
        $ikuu = DB::table('ikus')->where('ikuid', $idx)->update(['periode'=>$iku['periode'],'indikator'=>$iku['indikator'],'realisasi'=>$iku['realisasi'],
        'status'=>$iku['track'], 'keterangan'=>$iku['ket']]);
        return redirect('listiku');
    }
}
