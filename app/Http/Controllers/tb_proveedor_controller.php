<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_proveedor_obj;

class tb_proveedor_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $proveedor = new tb_proveedor_obj();
    $proveedor->idTipoDocumentoIdentidad = $req->idTipoDocumentoIdentidad;
    $proveedor->nroDocumento = $req->nroDocumento;
    $proveedor->nombre = $req->nombre;
    $proveedor->celular = $req->celular;
    $proveedor->telefono = $req->telefono;
    $proveedor->direccion = $req->direccion;
    $proveedor->correo = $req->correo;
    $proveedor->observacion = $req->observacion;
    $proveedor->save();
    return response()->json($proveedor,201);
  }
}
