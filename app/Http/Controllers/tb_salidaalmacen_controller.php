<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_salidaalmacen_obj;

class tb_salidaalmacen_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $salidaalmacen = new tb_salidaalmacen_obj();
    $salidaalmacen->fecha = $req->fecha;
    $salidaalmacen->idProveedor = $req->idProveedor;
    $salidaalmacen->idTipoDocumento = $req->idTipoDocumento;
    $salidaalmacen->nroDocumento = $req->nroDocumento;
    $salidaalmacen->idTipoDocumentoRef = $req->idTipoDocumentoRef;
    $salidaalmacen->nroDocumentoRef = $req->nroDocumentoRef;
    $salidaalmacen->idMoneda = $req->idMoneda;
    $salidaalmacen->valorVenta = $req->valorVenta;
    $salidaalmacen->impuesto = $req->impuesto;
    $salidaalmacen->totalNeto = $req->totalNeto;
    $salidaalmacen->observaciones = $req->observaciones;
    $salidaalmacen->save();
    return response()->json($salidaalmacen,201);
  }
}
