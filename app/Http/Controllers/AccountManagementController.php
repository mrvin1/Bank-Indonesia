<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
        $users=$req->validate([
            'nip' => ['required','size:5'],
            'name' => ['required','string'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'confirm' => ['required', 'same:password'],
            'role'=>['required'],
        ]);
        $users=User::create([
            'nip' => $users['nip'],
            'role'=>$users['role'],
            'name'=>$users['name'],
            'email'=>$users['email'],
            'password'=>$users['password'],
        ]);
        $users->save();
        return redirect('accountmanager');
    }

    public function editAccount($idx)
    {
        $user=User::find($idx);
        return view('editAccount',['user'=>$user]);
    }
    public function editAccountSave($idx,Request $req){
        $userss=$req->validate([
            'nip' => ['required'],
            'nama' => ['required','string'],
            'email' => ['required', 'email', 'max:255'],
            'role'=>['required'],
        ]);
        $users=User::find($idx);
        $users->nip = $userss['nip'];
        $users->name = $userss['nama'];
        $users->email = $userss['email'];
        $users->role = $userss['role'];
        $users->save();

        return redirect('accountmanager');
    }
    public function resetPass($idx){
        $users=User::find($idx);
        $users->password = bcrypt('purwokerto111');
        $users->save();
        return redirect('accountmanager');
    }

    public function changePassword()
    {
        return view('changePassword');
    }
    public function changePass(Request $request){
        $dataa = Auth::user();
        $new = $this->validate($request, [
            'old'     => 'required',
            'new'     => 'required|different:old',
            'con' => 'required|same:new',
        ]);
        $data = $request->all();
      
        $user = User::find(auth()->user()->id);
     
        if(!Hash::check($data['old'], $user->password)){
             return back()->with('error','wrong password');
        }else{
            $user = DB::table('users')->where('email', $dataa->email)->update(['password'=>bcrypt($new['new'])]);
            return redirect('home'); 
        }
    }

}
