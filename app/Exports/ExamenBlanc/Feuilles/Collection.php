<?php

namespace App\Exports\ExamenBlanc\Feuilles;

use Maatwebsite\Excel\Concerns\FromCollection;
//use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
//use Maatwebsite\Excel\Concerns\WithColumnFormatting;
//use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
//use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class Collection implements FromCollection, WithStyles , WithTitle
{
    protected $info;
    
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->info['data'] ?? collect([]);
    }

    public function styles(Worksheet $sheet)
    {
        return $this->info['styles'] ?? [];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->info['title'] ?? "Données";
    }

}
