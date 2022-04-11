<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function viewAnnouncement(){
        $auth = Auth::user()->email;
        $now = Carbon::now();
        $agenda=Agenda::where('email', $auth)->where('end', '>=',Carbon::now())->paginate(5);
        return view('announcement',['agenda'=>$agenda]);
    }
}
