<?php

namespace App\Models\Interfaces;


interface Payable
{
    
    public function getMontantAttribute();
    public function getTitreAttribute();
}
