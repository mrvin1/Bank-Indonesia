<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class BebarenganController extends Controller
{
    public function viewBebarengan(){
        $bebarengan = Meeting::paginate(5);
        return view('listBebarengan',['bebarengan'=>$bebarengan]);
    }
    public function addBebarengan(){
        return view('addBebarengan');
    }
    public function detailBebarengan(){
        return view('detailBebarengan');
    }
    public function editBebarengan(){
        return view('editBebarengan');
    }
}
