<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return szavak::all();
    }

    public function szavakLista(){
        $szavak = \DB::table('szavaks')
        ->select('angol','magyar')
        ->get();
        return response()->json($szavak);
    }


    public function szavakTema($temaId){
        $szavak = \DB::table('szavaks')
        ->join('temas as t','szavaks.temaId','=','t.id')
        ->select('szavaks.angol','szavaks.magyar')
        ->where('temaId', $temaId)
        ->get();
        return response()->json($szavak);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(szavak $szavak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(szavak $szavak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, szavak $szavak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(szavak $szavak)
    {
        //
    }
}
