<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_producto_obj;

class tb_producto_controller extends Controller
{
  public function store(Request $req){
    $producto = new tb_producto_obj();
    $producto->codigoSKU = $req->codigoSKU;
    $producto->descripcion = $req->descripcion;
    $producto->abreviatura = $req->abreviatura;
    $producto->idSigubLinea = $req->idSigubLinea;
    $producto->idUnidadMedida = $req->idUnidadMedida;
    $producto->idMarca = $req->idMarca;
    $producto->observacion = $req->observacion;
    $producto->save();
    return response()->json($producto,201);
  }
}
