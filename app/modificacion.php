<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modificacion extends Model
{
    protected $table = 'modificaciones';
    public $timestamps = false;
    protected $fillable = ['introduccion','titulo','contenido','fecha','seccion','user_id','contenido_id'];
}
