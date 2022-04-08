<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BebarenganController extends Controller
{
    public function viewBebarengan(){
        $bebarengan = Meeting::paginate(5);
        return view('listBebarengan',['bebarengan'=>$bebarengan]);
    }
    public function addBebarengan(){
        return view('addBebarengan');
    }
    public function addBebarenganPost(Request $req){
        $bebarengan=$req->validate([
            'tanggal' => ['required'],
            'loc' => ['required','string'],
            'title' => ['required', 'string'],
            'for' => ['required','string'],
            'not' => ['required','string'],
            'con' => ['required','string'],
            'link'=>['string'],
        ]);
        $file1 = $req['file1'];
        $file2 = $req['file2'];
        $file3 = $req['file3'];
        $fileName1="";
        $fileName2="";
        $fileName3="";
        if($file1!=null){
            $fileName1 = time() . '.' . $file1->getClientOriginalExtension();
        }
        if($file2!=null){
            $fileName2 = time() . '.' . $file2->getClientOriginalExtension();
        }
        if($file3!=null){
            $fileName3 = time() . '.' . $file3->getClientOriginalExtension();
        }

        $bebarengan=Meeting::create([
            'tanggalrapat' => $bebarengan['tanggal'],
            'lokasi'=>$bebarengan['loc'],
            'judul'=>$bebarengan['title'],
            'tujuan'=>$bebarengan['for'],
            'notulen'=>$bebarengan['not'],
            'kesimpulan'=>$bebarengan['con'],
            'linklampiran'=>$bebarengan['link'],
            'file1'=>$fileName1,
            'file2'=>$fileName2,
            'file3'=>$fileName3,            
        ]);

        if($file1!=null){
            Storage::putFileAs('public/bebarengan', $file1, $fileName1);
        }
        if($file2!=null){
            Storage::putFileAs('public/bebarengan', $file2, $fileName2);
        }
        if($file3!=null){
            Storage::putFileAs('public/bebarengan', $file3, $fileName3);
        }  
        $bebarengan->save();
        return redirect('bebarengan');
    }

    public function detailBebarengan($idx){
        $bebarengan=Meeting::find($idx);
        return view('detailBebarengan',['bebarengan'=>$bebarengan]);
    }
    public function editBebarengan($idx){
        $bebarengan=Meeting::find($idx);
        return view('editBebarengan', ['bebarengan'=>$bebarengan]);
    }
    public function editBebarenganPost($idx, Request $req){
        $bebarenganEdit=Meeting::find($idx);
        $bebarengan=$req->validate([
            'tanggal' => ['required'],
            'loc' => ['required','string'],
            'title' => ['required', 'string'],
            'for' => ['required','string'],
            'not' => ['required','string'],
            'con' => ['required','string'],
            'link'=>['string'],
        ]);
        $file1 = $req['file1'];
        $file2 = $req['file2'];
        $file3 = $req['file3'];
        $fileName1="";
        $fileName2="";
        $fileName3="";
        if($file1!=null){
            $fileName1 = time() . '.' . $file1->getClientOriginalExtension();
        }
        if($file2!=null){
            $fileName2 = time() . '.' . $file2->getClientOriginalExtension();
        }
        if($file3!=null){
            $fileName3 = time() . '.' . $file3->getClientOriginalExtension();
        }

        $bebarenganEdit->tanggalrapat = $bebarengan['tanggal'];
        $bebarenganEdit->lokasi = $bebarengan['loc'];
        $bebarenganEdit->judul = $bebarengan['title'];
        $bebarenganEdit->tujuan = $bebarengan['for'];
        $bebarenganEdit->notulen = $bebarengan['not'];
        $bebarenganEdit->kesimpulan = $bebarengan['con'];
        $bebarenganEdit->linklampiran = $bebarengan['link'];
  
        
        if($file1!=null){
            Storage::putFileAs('public/bebarengan', $file1, $fileName1);
            Storage::delete('public/bebarengan',$req->file1);
            $bebarenganEdit->file1 = $fileName1;
        }
        if($file2!=null){
            Storage::putFileAs('public/bebarengan', $file2, $fileName2);
            Storage::delete('public/bebarengan',$req->file2);
            $bebarenganEdit->file2 = $fileName2;
        }
        if($file3!=null){
            Storage::putFileAs('public/bebarengan', $file3, $fileName3);
            Storage::delete('public/bebarengan',$req->file3);
            $bebarenganEdit->file3 = $fileName3;
        }  
        $bebarenganEdit->save();
        return redirect('bebarengan');
    } 
    //belum selesai
    public function delBebarengan($idx){
        $bebarengan=Meeting::find($idx);
        $bebarengan->delete();
        return redirect()->back();
    }
}
