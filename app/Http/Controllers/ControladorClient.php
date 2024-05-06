<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ControladorClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_client = Client::all();
        return view('clients', compact('dades_client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('creaClient');
    }
    public function store(Request $request)
    {
    $nouClient = $request->validate([
    'Dni_client' => 'required',
    'Nom_i_cognoms' => 'required',
    'Edat' => 'required',
    'Telefon' => 'required',
    'Adreca' => 'required',
    'adressa' => 'required',
    'Ciutat' => 'required',
    'Pais' => 'required',
    'Email' => 'required',
    'Numero_del_permis_de_conduccio' => 'required',
    'Punts_del_permis_de_conduccio' => 'required',
    'Tipus_de_targeta' => 'required',
    'Numero_de_la_targeta' => 'required',
    ]);
    $Client = Client::create($nouClient);
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
