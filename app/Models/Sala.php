<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['numero'];

    public function proyecciones(){
        return $this->hasMany(Proyeccione::class);
    }
}
