<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_facturacliente_obj;

class tb_facuracliente_controller extends Controller
{
  public function store(Request $req){
    $facturacliente = new tb_facturacliente_obj();
    $facturacliente->fecha = $req->fecha;
    $facturacliente->idCliente = $req->idCliente;
    $facturacliente->idTipoDocumento = $req->idTipoDocumento;
    $facturacliente->nroDocumento = $req->nroDocumento;
    $facturacliente->nroValorización = $req->nroValorización;
    $facturacliente->idCondicionVenta = $req->idCondicionVenta;
    $facturacliente->idMoneda = $req->idMoneda;
    $facturacliente->valorVenta = $req->valorVenta;
    $facturacliente->impuesto = $req->impuesto;
    $facturacliente->totalNeto = $req->totalNeto;
    $facturacliente->saldo = $req->saldo;
    $facturacliente->save();
    return response()->json($facturacliente,201);
  }
}
