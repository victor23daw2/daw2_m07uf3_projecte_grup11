<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'Dni_client';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'Dni_client',
        'Nom_i_cognoms',
        'Edat',
        'Telefon',
        'Adreca',
        'Ciutat',
        'Pais',
        'Email',
        'Numero_del_permis_de_conduccio',
        'Punts_del_permis_de_conduccio',
        'Tipus_de_targeta',
        'Numero_de_la_targeta',
    ];

    // Métodos útiles para interactuar con la tabla CLIENTS
    public static function agregarCliente($datos) {
        return self::create($datos);
    }

    public static function eliminarCliente($dni) {
        return self::where('Dni_client', $dni)->delete();
    }

    public static function modificarCliente($dni, $datos) {
        return self::where('Dni_client', $dni)->update($datos);
    }

    public static function obtenerCliente($dni) {
        return self::findOrFail($dni);
    }
}
