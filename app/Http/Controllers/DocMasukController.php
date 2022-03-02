<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocMasukController extends Controller
{
    public function viewTable(){
        return view('dokumenMasuk');
    }
}
