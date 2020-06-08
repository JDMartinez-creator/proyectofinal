<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    protected $table = 'permisos_users';
    public $timestamps = false;
    protected $fillable = ['nombre'];
}
