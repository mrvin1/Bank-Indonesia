<?php

namespace App\Exports;

use App\Models\IKU;
use Maatwebsite\Excel\Concerns\FromCollection;
use Carbon\Carbon;

class IKUExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $tgl = new Carbon('2022-02-01');
        return IKU::join('indikatoriku','indikatoriku.id','=','ikus.indikator')->join('jenisiku','jenisiku.id','=','indikatoriku.jenisiku')->whereMonth('periode','=',$tgl->month)->whereYear('periode','=',$tgl->year)->get();  
    }
}
