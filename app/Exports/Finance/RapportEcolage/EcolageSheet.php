<?php

namespace App\Exports\Finance\RapportEcolage;

use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;



class EcolageSheet implements FromView , WithTitle , WithDrawings
{
    protected $sheet;
    
    public function __construct($sheet)
    {
        $this->sheet = $sheet;
    }

    public function view(): View
    {
        return view('components.exports.ecolage-sheet', [
            'sheet' => $this->sheet
        ]);
    }

    /**
     * @return string
     */
    public function title(): string
    {

        return $this->sheet->get('sheet_name') ?? 'feuille' ;
    }


    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/assets/logo-ecole/logo4.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('Q3');

        return $drawing;
    }





}