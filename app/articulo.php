<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    protected $table = 'articulos';
    public $timestamps = false;
    protected $fillable = ['introduccion','titulo','contenido','fecha','user_id'];
}
