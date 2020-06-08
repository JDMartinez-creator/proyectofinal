<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscripcion extends Model
{
    protected $table = 'subscripciones';
    public $timestamps = false;
    protected $fillable = ['correo','seccion','contenido_id'];
}
