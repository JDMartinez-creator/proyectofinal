<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class revisiones extends Model
{
    protected $table = 'revisiones';
    public $timestamps = false;
    protected $fillable = ['introduccion','titulo','contenido','fecha','asunto','seccion','user_id'];
}
