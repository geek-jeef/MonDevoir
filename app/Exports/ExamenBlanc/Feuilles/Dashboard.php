<?php

namespace App\Exports\ExamenBlanc\Feuilles;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

//use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
//use Maatwebsite\Excel\Concerns\WithColumnFormatting;
//use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
//use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class Dashboard implements FromView, WithTitle
{
    protected $info;
    public function __construct($info)
    {
        $this->info = $info;
    }

    public function view(): View
    {
        return view('components.exports.examen-blanc.feuilles.dashboard', [
            'data' => $this->info['data'] ?? collect([]),            
            'examen' => $this->info['examen'] ?? collect([]),          
        ]);
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->info['title'] ?? "Dashboard";
    }
}
