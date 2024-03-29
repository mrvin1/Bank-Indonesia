<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class COEController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Agenda::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('listcoe');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'delete')
    		{
				$event = Agenda::find($request->id);
				if($event->file1!=""){
					Storage::delete('public/coe/$event->file1');
				}
				if($event->file2!=""){
					Storage::delete('public/coe/$event->file2');
				}
				if($event->file3!=""){
					Storage::delete('public/coe/$event->file3');
				}
				$event->delete();
    			return response()->json($event);
    		}
    	}
    }
   public function addCOE(){
	   $user = User::all();
       return view('addCOE',['user'=>$user]);
   }
   public function addCOEPost(Request $req){
	$coe=$req->validate([
		'tanggal' => ['required'],
		'sd' => ['required'],
		'aktivitas' => ['required'],
		'ditunjukkan' => ['required'],
		'ket' => ['required'],
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
		Storage::putFileAs('public/coe', $file1, $fileName1);
	}
	if($file2!=null){
		$fileName2 = time() . '.' . $file2->getClientOriginalExtension();
		Storage::putFileAs('public/coe', $file2, $fileName2);
	}
	if($file3!=null){
		$fileName3 = time() . '.' . $file3->getClientOriginalExtension();
		Storage::putFileAs('public/coe', $file3, $fileName3);
	}
	$coe=Agenda::create([
		'start' => $coe['tanggal'],
		'end'=>$coe['sd'],
		'title'=>$coe['aktivitas'],
		'email'=>$coe['ditunjukkan'],
		'keterangan'=>$coe['ket'],
		'linklampiran'=>$coe['link'],
		'file1'=>$fileName1,
		'file2'=>$fileName2,
		'file3'=>$fileName3,  
	]);
	$coe->save();
	return redirect('coe');
   }
   
   public function detailCOE($idx){
	   $detil = Agenda::find($idx);
       return view('detailCOE', ['detil'=>$detil]);
   }
   
   public function editCOE($idx){
		$detil = Agenda::find($idx);
		$email = User::all();
       return view('editCOE',['detil'=>$detil, 'email'=>$email]);
   }
   public function editCOEPost($idx, Request $req){
	$coeEdit=Agenda::find($idx);
	$coe=$req->validate([
		'tanggal' => ['required'],
		'sd' => ['required'],
		'aktivitas' => ['required', 'string'],
		'ditunjukkan' => ['required'],
		'ket' => ['required','string'],
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

	$coeEdit->start = $coe['tanggal'];
	$coeEdit->end = $coe['sd'];
	$coeEdit->title = $coe['aktivitas'];
	$coeEdit->email = $coe['ditunjukkan'];
	$coeEdit->keterangan = $coe['ket'];
	$coeEdit->linklampiran = $coe['link'];

	if($file1!=null){
		Storage::putFileAs('public/coe', $file1, $fileName1);
		Storage::delete('public/coe',$req->file1);
		$coeEdit->file1 = $fileName1;
	}
	if($file2!=null){
		Storage::putFileAs('public/coe', $file2, $fileName2);
		Storage::delete('public/coe',$req->file2);
		$coeEdit->file2 = $fileName2;
	}
	if($file3!=null){
		Storage::putFileAs('public/coe', $file3, $fileName3);
		Storage::delete('public/coe',$req->file3);
		$coeEdit->file3 = $fileName3;
	}  
	$coeEdit->save();
	return redirect('coe');
   }

}
