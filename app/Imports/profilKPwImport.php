<?php

namespace App\Imports;

use App\Models\profilKPw;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class profilKPwImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 5;
    }
    public function transformDate($value, $format = 'Y-m-d')
{
    try {
        return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
    } catch (\ErrorException $e) {
        return \Carbon\Carbon::createFromFormat($format, $value);
    }
}
    public function model(array $row)
    {
        return new profilKPw([
            'nama'=>$row[1],
            'unitkerja'=>$row[2],
            'status'=>$row[3],
            'kepegawaian'=>$row[4],
            'nip'=>$row[5],
        ]);
    }
}
