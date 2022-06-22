<?php

namespace App\Imports;

use App\Issue;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
class IssuesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Issue([
            'name'     => $row[0],
            'emmil'  => $row[1],
            'phone'     => $row[2],
            'msg'    => $row[3],
            'building_number'     => $row[4],
            'appartment_number'    => $row[5],
            'user_id'     => Auth::user()->id,

        ]);
    }
}
