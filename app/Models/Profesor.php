<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{

    protected $table = 'profesor';
    protected $primaryKey = 'idProfesor';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idProfesor',
        'nombre',
        'apellido',
        'rfc'
    ];

    public function unidadaprendizaje()
    {
        return $this->belongsToMany(
            UnidadAprendizaje::class,
            'profesor_has_unidadaprendizaje',
            'idProfesor',
            'idUnidadAprendizaje'
        );
    }


    use HasFactory;
}
