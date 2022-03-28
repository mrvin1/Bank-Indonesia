<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IKUController extends Controller
{
    public function listIKU(){
        return view('listIKU');
    }
    public function addIKU(){
        return view('addIKU');
    }
}
