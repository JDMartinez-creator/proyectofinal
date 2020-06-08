<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    protected $table = 'noticia';
    public $timestamps = false;
    protected $fillable = ['introduccion','titulo','contenido','fecha','user_id'];
    
}
