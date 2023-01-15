<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class MerchantExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('merchants')

            ->select('id','first_name','last_name','email','created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'First Name',
            'Last Name',
            'Email',
            'created_at '

        ];
    }
}
