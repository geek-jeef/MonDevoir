<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AnneeAcademique;
use App\Http\Requests\StoreAnneeAcademiqueRequest;
use App\Http\Requests\UpdateAnneeAcademiqueRequest;

class AnneeAcademiqueController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $annees = AnneeAcademique::all();
    return response()->json($annees);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreAnneeAcademiqueRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreAnneeAcademiqueRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\AnneeAcademique  $anneeAcademique
   * @return \Illuminate\Http\Response
   */
  public function show(AnneeAcademique $anneeAcademique)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateAnneeAcademiqueRequest  $request
   * @param  \App\Models\AnneeAcademique  $anneeAcademique
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateAnneeAcademiqueRequest $request, AnneeAcademique $anneeAcademique)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\AnneeAcademique  $anneeAcademique
   * @return \Illuminate\Http\Response
   */
  public function destroy(AnneeAcademique $anneeAcademique)
  {
    //
  }
}
