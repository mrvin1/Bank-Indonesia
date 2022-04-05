<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IKU;

class IKUController extends Controller
{
    public function listIKU(){
        $iku=IKU::join('indikatorIKU','indikatorIKU.id','=', 'indikator')->paginate(3);
        return view('listIKU',['iku'=>$iku]);
    }
    public function addIKU(){
        return view('addIKU');
    }
    public function detailIKU(){
        return view('detailIKU');
    }
    public function editIKU(){
        return view('editIKU');
    }
}
