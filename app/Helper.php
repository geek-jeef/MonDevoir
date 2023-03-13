<?php

namespace App;
use App\Models\AnneeAcademique;

class Helper
{
    public static function formatCode($code)
    {
        return str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', $code));
    }

    public static function nombreEnLettre( $nombre){

        $formater = new \NumberFormatter('fr', \NumberFormatter::SPELLOUT);

        $nb = str_replace(' ', '', $nombre);                      
        $nb = preg_replace("/[A-Za-z]/", "", $nb);  
        $nb = preg_replace("/^0+/", "", $nb);

        if ($nb == '') $nb = '0';
            
        // Séparateur.
        $decSep = preg_replace("/[0-9]/", '', $nb);     // On ne garde que ce qui n'est pas numérique
        $decSep = substr($decSep, -1);                  // et on prend le dernier des caractères restants.

        // Partie entière et partie décimale.
        if ($decSep == '') {
            // Pas de partie décimale.
            return $formater->format($nb);
        } else {
            // Ajout d'un 0 quand il manque devant le séparateur décimal.
            // Noter le double \ pour échapper le séparateur . qui est un opérateur dans les expressions régulières.
            $nb = preg_replace("/^\\" . $decSep . "/", "0" . $decSep, $nb);   
            $parts = explode($decSep, preg_replace("/^[0-9] " . $decSep . "/", '', $nb));
          
            // Nettoyage partie décimale.
            if ($parts[1] == ''){
                unset($parts[1]);
                $decSep = '';
                return $formater->format($parts[0]) ;
            } else {
                // On coupe la partie décimale au nombre de caractères en fonction du rapport entre unité et sous-unité.
                $parts[1] = substr($parts[1], 0, 2);
                // On bourre avec des 0 de fin.
                while (strlen($parts[1]) < 2){
                  $parts[1] .= '0';
                }
                return $formater->format($parts[0]).' virgule '.$formater->format($parts[1]);
            }
        }
    }

    public static function annee(){
        if(session()->has('annee_en_cours')){
            $id = session('annee_en_cours')->id;

            return AnneeAcademique::where('id',$id)->latest()->first();
        }else{
            return AnneeAcademique::latest()->first();
        }
    }

    public static function nomDossier($file_name){ 
        $file_name_str = $file_name; 
         
        // Replaces all spaces with hyphens. 
        $file_name_str = str_replace(' ', '-', $file_name_str); 
        // Removes special chars. 
        $file_name_str = preg_replace('/[^A-Za-z0-9\-\_]/', '', $file_name_str); 
        // Replaces multiple hyphens with single one. 
        $file_name_str = preg_replace('/-+/', '-', $file_name_str); 
         
        $clean_file_name = $file_name_str; 
         
        return strtolower(  $clean_file_name ); 
    }

    public static function avatar($file_name){ 
        $file_name_str = $file_name; 
         
        // Removes special chars. 
        $file_name_str = preg_replace('/[^A-Za-z0-9\-\_]/', ' ', $file_name_str); 
        // Replaces multiple hyphens with single one. 
        $file_name_str = preg_replace('/-+/', '-', $file_name_str); 
         
        $clean_file_name = $file_name_str; 
         
        return $clean_file_name; 
    }

    public static function formatNomMatiere($name){
        $index = str_replace(".", "",  $name);
        $index = str_replace("|", "",  $index);
        return $index;
    }

}
