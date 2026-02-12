<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyeccione extends Model
{
    protected $fillable = ['pelicula_id','fecha_hora','sala_id'];

    public function pelicula(){
        return $this->belongsTo(Pelicula::class);
    }

    public function sala(){
        return $this->belongsTo(Sala::class);
    }

    public function entradas(){
        return $this->hasMany(Entrada::class);
    }
}
