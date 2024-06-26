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
    'Ciutat' => 'required',
    'Pais' => 'required',
    'Email' => 'required',
    'Numero_permis_conduccio' => 'required',
    'Punts_permis_conduccio' => 'required',
    'Tipus_targeta' => 'required',
    'Numero_targeta' => 'required',
    ]);
    $Client = Client::create($nouClient);
    return view('dashboard');
    }


    /**
     * Display the specified resource.
     */
    public function show($Dni_client)
    {
    $dades_client = Client::findOrFail($Dni_client);
    return view('mostraClient',compact('dades_client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($dni_client){
        $dades_client = Client::findOrFail($dni_client);
        return view('actualitzaClient', compact('dades_client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Dni_client)
    {
        $noves_dades_clients = $request->validate([
        'Dni_client' => 'required',
        'Nom_i_cognoms' => 'required',
        'Edat' => 'required',
        'Telefon' => 'required',
        'Adreca' => 'required',
        'Ciutat' => 'required',
        'Pais' => 'required',
        'Email' => 'required',
        'Numero_permis_conduccio' => 'required',
        'Punts_permis_conduccio' => 'required',
        'Tipus_targeta' => 'required',
        'Numero_targeta' => 'required',
    ]);
    
        Client::findOrFail($Dni_client)->update($noves_dades_clients);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Dni_client)
    {
    $Client = Client::findOrFail($Dni_client)->delete();
    return view('dashboard');
    }

}
