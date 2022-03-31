<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function viewAnnouncement(){
        $auth = Auth::user()->email;
        $agenda=Agenda::where('email', $auth)->paginate(5);
        return view('announcement',['agenda'=>$agenda]);
    }
}
