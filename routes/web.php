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
    Route::get('/lloga/{Dni_client}/{Matricula_auto}/edit', [ControladorLloga::class, 'edit'])->name('lloga.edit');    Route::patch('/lloga/{Dni_client}/{Matricula_auto}', [ControladorLloga::class, 'update'])->name('lloga.update');
    Route::delete('/lloga/{Dni_client}/{Matricula_auto}', [ControladorLloga::class, 'destroy'])->name('lloga.destroy');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

