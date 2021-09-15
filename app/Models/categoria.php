<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $timestamps = FALSE;//Para no extraer la fecha de creacion y actualizacion
    protected $fillable =  ["id", "cat_nom", "cat_obs"];
}
