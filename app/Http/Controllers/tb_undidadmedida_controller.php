<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_unidadmedida_obj;

class tb_undidadmedida_controller extends Controller
{
  public function store(Request $req){
    $unidadmedida = new tb_unidadmedida_obj();
    $unidadmedida->descripcion = $req->descripcion;
    $unidadmedida->abreviatura = $req->abreviatura;
    $unidadmedida->save();
    return response()->json($unidadmedida,201);
  }
}
