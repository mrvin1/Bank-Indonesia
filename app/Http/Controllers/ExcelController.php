<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\IKUExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export(){
        return Excel::download(new IKUExport, 'iku.xlsx');
    }
}
