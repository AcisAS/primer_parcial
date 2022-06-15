<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadAprendizaje extends Model
{

    protected $table = 'unidadaprendizaje';
    protected $primaryKey = 'idUnidadAprendizaje';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idUnidadAprendizaje',
        'horas_clase',
        'horas_taller',
        'horas_laboratorio'
    ];


    public function profesor()
    {
        return $this->belongsToMany(
            Profesor::class,
            'profesor_has_unidadaprendizaje',
            'idUnidadAprendizaje',
            'idProfesor'
        );
    }

    use HasFactory;
}
