<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class namePermisos extends Model
{
    protected $table = 'permisos';
    public $timestamps = false;
    protected $fillable = ['user_id','permisos_id'];
}
