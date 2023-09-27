<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Inscripcion(){
        return $this->belongsTo(Inscripcion::class,'id_inscripcion');
    }
}
