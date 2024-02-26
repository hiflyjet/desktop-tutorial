<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semaforo extends Model
{
    use HasFactory;

    protected $table="semaforo";
    protected $fillable=["dispositivo","estatus","empresa","fecha","estacion"];
}
