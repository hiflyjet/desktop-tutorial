<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialSemaforo extends Model
{

    protected $table="historial_semaforo";
    protected $fillable=["dispositivo","estatus","fecha","estacion"];
    use HasFactory;
}
