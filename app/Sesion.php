<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{

	protected $table = 'sesion';

	protected $fillable = ['rol', 'usuario', 'inicio'];

}
