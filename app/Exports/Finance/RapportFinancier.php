<?php

namespace App\Exports\Finance;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\HasReferencesToOtherSheets;

class RapportFinancier implements WithMultipleSheets , HasReferencesToOtherSheets
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
            $sheets[] = new RapportFinancier\RapportFinancierSheet($one_sheet);
        }
        return $sheets;
    }

}
