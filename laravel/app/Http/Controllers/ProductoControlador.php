<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto as Producto;
use APP\Categoria as Categoria;


class ProductoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // nombre','precio','descripcion','presentacion','idcategoria','idpresentacion'];
        $nombre = 'imperial';
        $precio = '12';
        $descripcion = 'cera a prueba de agua';
        $idcategoria = '3';
        $idpresentacion = '5';
        
         $producto = Producto::create(['nombre' => $nombre, 
                                    'precio' => $precio,
                                    'descripcion' => $descripcion, 
                                    'idcategoria' => $idcategoria,
                                    'idpresentacion' => $idpresentacion]);     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nombre)
    {
//        $pro=Producto::where('nombre',$nombre)->join(Categoria, 'Producto.idproducto','=','Categoria.idcategoria')->get();
        $pro=Producto::where('nombre',$nombre)->get();
        foreach ($pro as $pro) {
            print_r($pro->nombre. '  ');
            print_r($pro->precio. '  ');
            print_r($pro->descripcion);
            //print_r($pro->Categoria.nombre);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
            $producto->nombre = $nombre; 
            $producto->precio = $precio;
            $producto->descripcion = $descripcion; 
            $producto->idcategoria = $idcategoria;
            $producto->idpresentacion = $idpresentacion;
            $producto->save();     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
    }
}
