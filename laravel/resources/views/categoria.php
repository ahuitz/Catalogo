<?php

use App\Categoria as Categoria;

$categoria = new Categoria;

$categoria->nombre = 'John';

$categoria->save();
//$user = Categoria::create(['nombre' => 'John'])

?>
