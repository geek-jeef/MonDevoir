<?php

namespace App\Models\Interfaces;


interface Notable
{
    public function getPonderationAttribute();
    public function getNomNotableAttribute();
    public function getClasseIDAttribute();
    public function eleves();
}
