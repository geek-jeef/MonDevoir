<?php

namespace App\Exports\Finance;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RapportEcolage implements WithMultipleSheets
{
    use Exportable;


    protected $classeur;
    
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

        foreach($this->classeur as $one_sheet){
            $sheets[] = new RapportEcolage\EcolageSheet($one_sheet);
        }
        return $sheets;
    }

    
}
