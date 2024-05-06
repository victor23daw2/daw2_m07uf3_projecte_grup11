<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloga;

class ControladorLloga extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_lloga = Lloga::all();
        return view('lloga', compact('dades_lloga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('creaLloga');
    }
    public function store(Request $request)
    {
    $nouLloga = $request->validate([
    'Dni_client' => 'required',
    'Matricula_auto' => 'required',
    'Data_prestec' => 'required',
    'Data_devolucio' => 'required',
    'Lloc_devolucio' => 'required',
    'Preu_per_dia' => 'required',
    'Prestec_amb_retorn_deposit_ple' => 'required',
    'Tipus_assegurança' => 'required',
    ]);
    $Lloga = Lloga::create($nouLloga);
    return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
