<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;

    protected $table = 'usuaris';
    protected $primaryKey = 'Email';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'Nom_i_cognoms',
        'Email',
        'Contrasenya',
        'Tipus',
        'Darrera_hora_d_entrada',
        'Darrera_hora_de_sortida',
    ];

    // Métodos útiles para interactuar con la tabla USUARIS
    public static function agregarUsuari($datos) {
        return self::create($datos);
    }

    public static function eliminarUsuari($email) {
        return self::where('Email', $email)->delete();
    }

    public static function modificarUsuari($email, $datos) {
        return self::where('Email', $email)->update($datos);
    }

    public static function obtenerUsuari($email) {
        return self::findOrFail($email);
    }
}
