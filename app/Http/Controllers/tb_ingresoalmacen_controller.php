<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_ingresoalmacen_objs;

class tb_ingresoalmacen_controller extends Controller
{
  public function store(Request $req){
    $ingresoalmacen = new tb_ingresoalmacen_objs();
    $ingresoalmacen->fecha = $req->fecha;
    $ingresoalmacen->idProveedor = $req->idProveedor;
    $ingresoalmacen->idTipoDocumento = $req->idTipoDocumento;
    $ingresoalmacen->nroDocumento = $req->nroDocumento;
    $ingresoalmacen->idTipoDocumentoRef = $req->idTipoDocumentoRef;
    $ingresoalmacen->nroDocumentoRef = $req->nroDocumentoRef;
    $ingresoalmacen->idMoneda = $req->idMoneda;
    $ingresoalmacen->valorVenta = $req->valorVenta;
    $ingresoalmacen->impuesto = $req->impuesto;
    $ingresoalmacen->totalNeto = $req->totalNeto;
    $ingresoalmacen->observaciones = $req->observaciones;
    $ingresoalmacen->save();
    return response()->json($ingresoalmacen,201);
  }
}
