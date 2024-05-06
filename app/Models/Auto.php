<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $table = 'autos';
    protected $primaryKey = 'Matricula_auto';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'Matricula_auto',
        'Numero_bastidor',
        'Marca',
        'Model',
        'Color',
        'Nombre_places',
        'Nombre_portes',
        'Grandaria_maleter',
        'Tipus_combustible',
    ];

    // Métodos útiles para interactuar con la tabla AUTOS
    public static function agregarAuto($datos) {
        return self::create($datos);
    }

    public static function eliminarAuto($matricula) {
        return self::where('Matricula_auto', $matricula)->delete();
    }

    public static function modificarAuto($matricula, $datos) {
        return self::where('Matricula_auto', $matricula)->update($datos);
    }

    public static function obtenerAuto($matricula) {
        return self::findOrFail($matricula);
    }
}
