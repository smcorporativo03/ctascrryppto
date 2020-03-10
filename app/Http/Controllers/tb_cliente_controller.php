<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_cliente_obj;

class tb_cliente_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $cliente = new tb_cliente_obj();
    $cliente->idTipoDocumentoIdentidad = $req->idTipoDocumentoIdentidad; 
    $cliente->nroDocumento = $req->nroDocumento; 
    $cliente->nombre = $req->nombre; 
    $cliente->celular = $req->celular; 
    $cliente->telefono = $req->telefono; 
    $cliente->direccion = $req->direccion; 
    $cliente->correo = $req->correo; 
    $cliente->observacion = $req->observacion; 
    $cliente->save();
    return response()->json($cliente,201);
  }
}
