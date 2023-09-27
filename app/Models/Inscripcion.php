<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = 'inscripciones';
    protected $guarded =[];
    
    public function clase(){
        return $this ->belongsto(Clase::class,'id_clase');

    }
    public function estudiante(){
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
    public function pagos(){
        return $this -> hasMany(Pago::class);
    }
        
    
}
