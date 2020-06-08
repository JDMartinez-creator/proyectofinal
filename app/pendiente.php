<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendiente extends Model
{
    protected $table = 'pendientes';
    public $timestamps = false;
    protected $fillable = ['introduccion','titulo','contenido','fecha','seccion','user_id'];
}
