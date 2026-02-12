<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = ['proyeccione_id'];

    public function proyeccione(){
        return $this->belongsTo(Proyeccione::class);
    }
}
