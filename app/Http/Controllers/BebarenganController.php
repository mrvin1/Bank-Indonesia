<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebarenganController extends Controller
{
    public function viewBebarengan(){
        return view('listBebarengan');
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
