<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Http\Controllers\Controller;
use App\Models\Materia;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $estudiante=Estudiante::with('materias')->find(1);
       $materia=Materia::with('estudiantes')->find(1);
       return response()->json([
        "estudiante"=>$estudiante,
        "materia"=>$materia,
       ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
