<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloga extends Model
{
    use HasFactory;

    protected $table = 'lloga';
    protected $primaryKey = ['Dni_client', 'Matricula_auto'];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'Dni_client',
        'Matricula_auto',
        'Data_del_prestec',
        'Data_de_devolucio',
        'Lloc_de_devolucio',
        'Preu_per_dia',
        'Prestec_amb_retorn_de_deposit_ple',
        'Tipus_d_asseguranca',
    ];

    // Métodos útiles para interactuar con la tabla LLOGA
    public static function agregarLloga($datos) {
        return self::create($datos);
    }

    public static function eliminarLloga($dni, $matricula) {
        return self::where([
            ['Dni_client', '=', $dni],
            ['Matricula_auto', '=', $matricula]
        ])->delete();
    }

    public static function modificarLloga($dni, $matricula, $datos) {
        return self::where([
            ['Dni_client', '=', $dni],
            ['Matricula_auto', '=', $matricula]
        ])->update($datos);
    }

    public static function obtenerLloga($dni, $matricula) {
        return self::findOrFail([
            'Dni_client' => $dni,
            'Matricula_auto' => $matricula,
        ]);
    }
}
