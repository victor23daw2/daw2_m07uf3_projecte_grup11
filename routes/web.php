<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorAuto;
use App\Http\Controllers\ControladorUsuari;
use App\Http\Controllers\ControladorLloga;
use App\Http\Controllers\ControladorClient;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/autos', function () {
    return view('autos');
});
Route::get('/usuaris', function () {
    return view('usuaris');
});
Route::get('/lloga', function () {
    return view('lloga');
});
Route::get('/clients', function () {
    return view('clients');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('autos', ControladorAuto::class);
    Route::resource('usuaris', ControladorUsuari::class);
    Route::resource('lloga', ControladorLloga::class);
    Route::resource('clients', ControladorClient::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

// Route::resource('autos', ControladorAuto::class);
// Route::resource('usuaris', ControladorUsuari::class);
// Route::resource('lloga', ControladorLloga::class);
// Route::resource('clients', ControladorClient::class);


// use App\Models\Auto;


// // Ruta para agregar registros a la tabla Autos
// Route::post('/nouauto', function () {
//     $datos1 = array(
//         "Matricula_auto" => "ABC123",
//         "Numero_de_bastidor" => "B12345",
//         "Marca" => "Toyota",
//         "Model" => "Corolla",
//         "Color" => "Blanco",
//         "Nombre_de_places" => 5,
//         "Nombre_de_portes" => 4,
//         "Grandaria_del_maleter" => 480,
//         "Tipus_de_combustible" => "gasolina"
//     );
//     Auto::create($datos1);

//     $datos2 = array(
//         "Matricula_auto" => "XYZ789",
//         "Numero_de_bastidor" => "Z98765",
//         "Marca" => "Honda",
//         "Model" => "Civic",
//         "Color" => "Negro",
//         "Nombre_de_places" => 5,
//         "Nombre_de_portes" => 4,
//         "Grandaria_del_maleter" => 500,
//         "Tipus_de_combustible" => "diesel"
//     );
//     Auto::create($datos2);
// });
// Route::get('/mostrauto', function () {
//     $matricula = "ABC123"; // Matricula para buscar
//     $datos1 = Auto::where("Matricula_auto", $matricula)->first(); // Busca el primer resultado
//     echo $datos1["color"]."\n";
// });

// Route::delete('/delauto', function () {
//     $matricula = "ABC123"; // Matrícula del auto a eliminar
//     $resultado = Auto::where("Matricula_auto", $matricula)->delete(); // Elimina registros

//     if ($resultado) {
//         echo "Auto con matrícula " . $matricula . " eliminado.\n";
//     } else {
//         echo "No se encontró un auto con matrícula " . $matricula . ".\n";
//     }
// });
