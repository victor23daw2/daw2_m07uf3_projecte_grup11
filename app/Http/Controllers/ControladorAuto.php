<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class ControladorAuto extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_auto = Auto::all();
        return view('autos', compact('dades_auto'));
        // Recollirà totes les entrades de la taula auto i les desarà dins d'una 
       //variable de nom $dades_auto
        //Cridara a la vista llista.blade.php que es trobarà a resouces/views per mostrar 
       //les dades dels auto
        //The compact() function creates an array from variables and their values
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('creaAuto');
    }
    public function store(Request $request)
    {
    $nouAuto = $request->validate([
    'Matricula_auto' => 'required',
    'Numero_bastidor' => 'required',
    'Marca' => 'required',
    'Model' => 'required',
    'Color' => 'required',
    'Nombre_places' => 'required',
    'Nombre_portes' => 'required',
    'Grandaria_maleter' => 'required',
    'Tipus_combustible' => 'required',
    ]);
    $auto = Auto::create($nouAuto);
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
    public function edit($Matricula_auto)
    {
    $dades_auto = Auto::findOrFail($Matricula_auto);
    return view('actualitzaAuto',compact('dades_auto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Matricula_auto)
    {
    $noves_dades_auto = $request->validate([
        'Matricula_auto' => 'required',
        'Numero_bastidor' => 'required',
        'Marca' => 'required',
        'Model' => 'required',
        'Color' => 'required',
        'Nombre_places' => 'required',
        'Nombre_portes' => 'required',
        'Grandaria_maleter' => 'required',
        'Tipus_combustible' => 'required',
    ]);
    Auto::findOrFail($Matricula_auto)->update($noves_dades_auto);
    return view('dashboard');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Matricula_auto)
    {
    $auto = Auto::findOrFail($Matricula_auto)->delete();
    return view('dashboard');
    }
}
