<?php

namespace App\Imports;

use App\Models\report;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportReport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new report([
            'subject' => $row[0],
            'content' => $row[1],
        ]);
    }
}
