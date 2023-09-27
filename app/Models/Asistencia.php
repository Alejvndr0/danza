<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function estudiante(){
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
    public function clase(){
        return $this->belongsTo(clase::class, 'id_clase');
    }
}
