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

    public function edit($Dni_client, $Matricula_auto)
    {
        $dades_lloga = Lloga::where('Dni_client', $Dni_client)
            ->where('Matricula_auto', $Matricula_auto)
            ->firstOrFail();

        return view('actualitzaLloga', compact('dades_lloga'));
    }
    public function update(Request $request, $Dni_client, $Matricula_auto)
{
    // Validar los campos
    $noves_dades_lloga = $request->validate([
        'Dni_client' => 'required',
            'Matricula_auto' => 'required',
            'Data_prestec' => 'required',
            'Data_devolucio' => 'required',
            'Lloc_devolucio' => 'required',
            'Preu_per_dia' => 'required',
            'Prestec_amb_retorn_deposit_ple' => 'required',
            'Tipus_assegurança' => 'required',
    ]);

    // Encontrar y actualizar el registro
    Lloga::where('Dni_client', $Dni_client)
        ->where('Matricula_auto', $Matricula_auto)
        ->update($noves_dades_lloga);

    return view('dashboard');
}
    public function create()
    {
    return view('creaLloga');
    }
    public function store(Request $request)
    {
        // Validación de campos
        $noves_dades_lloga = $request->validate([
            'Dni_client' => 'required',
            'Matricula_auto' => 'required',
            'Data_prestec' => 'required',
            'Data_devolucio' => 'required',
            'Lloc_devolucio' => 'required',
            'Preu_per_dia' => 'required',
            'Prestec_amb_retorn_deposit_ple' => 'required',
            'Tipus_assegurança' => 'required',
        ]);
    
        // Crear un nuevo registro
        Lloga::create($noves_dades_lloga);
    
        return redirect()->route('dashboard'); // Usar 'redirect' en lugar de 'view'
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Dni_client, $Matricula_auto)
    {
        
         Lloga::where('Dni_client', $Dni_client)
                      ->where('Matricula_auto', $Matricula_auto)
                      ->delete();
    
       
        
        return redirect()->route('dashboard');
    }
    public function show($Dni_client, $Matricula_auto)
    {
        $dades_lloga = Lloga::where('Dni_client', $Dni_client)
                            ->where('Matricula_auto', $Matricula_auto)
                            ->firstOrFail();
        return view('mostraLloga', compact('dades_lloga'));
    }

    
}

