<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountManagementController extends Controller
{
    public function viewList(){
        $user=User::paginate(5);
        return view('accountManagementList', ['user'=>$user]);
    }
    public function delAccount($idx){
        $user=User::find($idx);
        $user->delete();
        return redirect()->back();
    }
    public function addAccount(){
        return view('auth.register');
    }
    public function addAccountPost(Request $req){
        $req->validate([
            'nip' => ['required'],
            'name' => ['required','string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            
        ]);
        return redirect()->back();
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
