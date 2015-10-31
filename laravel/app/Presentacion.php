<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    protected $table = 'presentaciones';
    protected $primaryKey = 'idpresentacion';
  	protected $fillable = ['nombre'];
  	protected $guarded = ['idpresentacion'];

}
