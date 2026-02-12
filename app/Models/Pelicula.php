<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable = ['titulo'];

    public function proyecciones(){
        return $this->hasMany(Proyeccione::class);
    }

    public function entradas(){
        return $this->hasManyThrough(Entrada::class,Proyeccione::class);
    }
}
