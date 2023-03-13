<?php

namespace App\Exports\ExamenBlanc;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleCollection implements WithMultipleSheets
{
    protected $classeur;

    const SHEET_COLLECTION = 'simpleCollection';
    const SHEET_DASHBOARD = 'Dashboard';
    
    
    public function __construct($classeur)
    {
        $this->classeur = $classeur;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        foreach($this->classeur as $sheet){
            if($sheet['type'] == self::SHEET_COLLECTION){
                $sheets[] = new Feuilles\Collection($sheet);

            }elseif ($sheet['type'] == self::SHEET_DASHBOARD) {
                $sheets[] = new Feuilles\Dashboard($sheet);
            }
            else{
                $sheets[] = new Feuilles\Collection($sheet);
            }
        }
        return $sheets;
    }
}
