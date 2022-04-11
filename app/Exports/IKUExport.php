<?php

namespace App\Exports;

use App\Models\IKU;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;


class IKUExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     $tgl = new Carbon('2022-02-01');
    //     // $iku=IKU::join('indikatoriku','indikatoriku.id','=','ikus.indikator')->join('jenisiku','jenisiku.id','=','indikatoriku.jenisiku')->whereMonth('periode','=',$tgl->month)->whereYear('periode','=',$tgl->year)->get(); 
    //     $iku=IKU::all();
    //     return $iku; 
    // }

    // public function __construct(string $keyword)
    // {
    //     $this->periode = $keyword;
    // }
    public function view(): View
    {
        $tgl = new Carbon('2022-02-01');
        return view('ikuexport', [
            'data' => IKU::join('indikatoriku','indikatoriku.id','=','ikus.indikator')->join('jenisiku','jenisiku.id','=','indikatoriku.jenisiku')->whereMonth('periode','=',$tgl->month)->whereYear('periode','=',$tgl->year)->orderBy("indikator")->get()
        ]);
    }

}
