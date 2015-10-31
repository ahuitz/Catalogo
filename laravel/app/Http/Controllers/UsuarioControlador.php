<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario as Usuario;

class UsuarioControlador extends Controller
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
        //$nombre, $apellido, $usuario, $contraseña, $correo
        $nombre='aranoly';
        $apellido='morales';
         $usuario='aramo';
          $contraseña='123';
           $correo= 'ggg@ggg';
         $usuario = Usuario::create(['nombre' => $nombre, 
                                    'apellido' => $apellido,
                                    'usuario' => $usuario, 
                                    'contraseña' => $contraseña,
                                    'correo' => $correo]);     
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
    public function show($usuario)
    {
        $us=Usuario::where('usuario',$usuario)->get();
        foreach ($us as $us) {
            print_r($us->nombre. '  ');
            print_r($us->apellido. '  ');
            print_r($us->correo);
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
    public function update($id,$nombre, $apellido, $usuario, $contraseña, $correo)
    {
        $id='1';
        $nombre='aranoly';
        $apellido='morales';
         $usuario='aramo';
          $contraseña='123';
           $correo= 'ggg@ggg';
        $usuario = Usuario::find($id);
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellido;
        $usuario->usuario = $usuario;
        $usuario->contraseña = $contraseña;
        $usuario->correo = $correo;
        $usuario->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
    }
}
