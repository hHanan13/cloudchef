<?php

namespace App\Exports;

use App\Models\report;
use App\Models\merchant;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use DB;

class ExportReport implements FromCollection,WithHeadings ,WithMapping ,ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    private $team;

    // use constructor to handle dependency injection
    public function __construct(merchant $team)
    {
        $this->team = $team;
    }

    public function collection()
    {
        // return  DB::table('reports')->where('merchant_id' , $this->patientId)

        //     ->select('subject','content')->get();
        // return $this->team->reportData()->get();
        return merchant::with('reportData')->get();
    }

    public function map($row): array
    {
        // row will be the attendance and offers will be the relationship
        $offers = array();
        foreach ($row->reportData as $offer) {
            $offers[] = $offer->subject.' : '.$offer->content;
        }


        return [
            $row->id, // attendance->id
            $row->created_at, // attendance->created_at
            implode(" | ",$offers) // list of offers separated with | base on above logic
        ];
    }

    public function headings(): array
    {
        return [
           
            'id',
            'created_at',
            'offers'

        ];
    }
}
