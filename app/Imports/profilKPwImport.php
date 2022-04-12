<?php

namespace App\Imports;

use App\Models\profilKPw;
use Maatwebsite\Excel\Concerns\ToModel;

class profilKPwImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new profilKPw([
            'nip'=>$row[0],
            'nama'=>$row[1],
            'jeniskelamin'=>$row[2],
            'alamat'=>$row[3],
            'tanggallahir'=>$row[4],
            'status'=>$row[5],
        ]);
    }
}
