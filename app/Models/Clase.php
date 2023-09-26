<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function profesor(){
        return $this -> belongsTo(Profesor::class,'id_profesor');
    }

    public function estilo(){
        return $this -> belongsTo(Estilo::class,'id_estilo');
    }
}
