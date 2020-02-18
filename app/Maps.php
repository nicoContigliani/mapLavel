<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    protected $fillable = [
        'namnombre', 'direccion', 'lat', 'lng', 'foto', 'comentario',
    ];
}
