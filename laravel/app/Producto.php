<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'idproducto';
    protected $guarded = ['idproducto'];
  	protected $fillable = ['nombre','precio','descripcion','idcategoria','idpresentacion'];

}
