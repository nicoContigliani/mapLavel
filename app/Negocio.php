<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $fillable = ['nombre', 'direccion', 'lat', 'lng', 'foto', 'comentario'];
}
