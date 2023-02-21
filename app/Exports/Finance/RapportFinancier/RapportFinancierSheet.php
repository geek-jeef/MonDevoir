<?php

namespace App\Exports\Finance\RapportFinancier;

use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

//use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

//use Maatwebsite\Excel\Concerns\WithPreCalculateFormulas; 



class RapportFinancierSheet implements FromView , WithTitle , WithStyles
{
    protected $sheet;
    
    public function __construct($sheet)
    {
        $this->sheet = $sheet;
    }

    public function view(): View
    {
        return view('components.exports.rapport-financier-sheet', [
            'sheet' => $this->sheet
        ]);
    }

    /**
     * @return string
     */
    public function title(): string
    {

        debug($this->sheet->get('sheet_name'));
        return $this->sheet->get('sheet_name') ?? 'feuille' ;
    }


    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
            2 => ['font' => ['bold' => true]],
        ];
    }




}
