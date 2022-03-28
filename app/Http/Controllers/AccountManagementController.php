<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountManagementController extends Controller
{
    public function viewList(){
        return view('accountManagementList');
    }
    public function addAccount(){
        return view('auth.register');
    }
    public function editAccount($idx,Request $req)
    {
        return view('editAccount');
    }
    public function changePassword(Request $req)
    {
        return view('changePassword');
    }
}
