<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnneeAcademique;
use App\Models\CycleAcademique;
use App\Models\Classe;

class CycleAcademiqueController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $cycles = CycleAcademique::all();
    return response()->json($cycles);
  }

  public function ofAnneeAcademique(AnneeAcademique $annee){

    $cycles = CycleAcademique::where('annee_academique_id',$annee->id)->get();
    return response()->json($cycles);
  }

  public function ofCurrentAnneeAcademique(){

    $annee = \Hp::annee();
    $cycles = CycleAcademique::where('annee_academique_id',$annee->id)->get();
    return response()->json($cycles);
  }

  

  public function anneeAcademiqueOf(CycleAcademique $cycle){
    $annee = AnneeAcademique::find($cycle->annee_academique_id);
    return response()->json($annee);
  }

  public function classesOf(CycleAcademique $cycle){
    $classes = Classe::where('cycle_academique_id',$cycle->id)->get();
    return response()->json($classes);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\CycleAcademique  $cycleAcademique
   * @return \Illuminate\Http\Response
   */
  public function show(CycleAcademique $cycleAcademique)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\CycleAcademique  $cycleAcademique
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, CycleAcademique $cycleAcademique)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\CycleAcademique  $cycleAcademique
   * @return \Illuminate\Http\Response
   */
  public function destroy(CycleAcademique $cycleAcademique)
  {
    //
  }
}
