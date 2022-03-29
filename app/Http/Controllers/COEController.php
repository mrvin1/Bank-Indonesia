<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class COEController extends Controller
{
   public function index(Request $req){
       return view('listCOE');
   }  
   public function addCOE(){
       return view('addCOE');
   }   
   public function detailCOE(){
       return view('detailCOE');
   }
   public function editCOE(){
       return view('editCOE');
   }
    
}
