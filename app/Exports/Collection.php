<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class Collection implements FromCollection, WithStyles
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

}
