<?php

namespace App\Exports;

use App\Models\IKU;
use Maatwebsite\Excel\Concerns\FromCollection;

class IKUExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IKU::all();
    }
}
