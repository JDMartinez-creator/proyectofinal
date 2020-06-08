<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lanzamiento extends Model
{
        protected $table = 'lanzamientos';
    public $timestamps = false;
    protected $fillable = ['introduccion','titulo','contenido','fecha','user_id'];
}
