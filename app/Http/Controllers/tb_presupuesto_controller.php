<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_presupuesto_obj;

class tb_presupuesto_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $presupuesto = new tb_presupuesto_obj();
    $presupuesto->fecha = $req->fecha;
    $presupuesto->idCliente = $req->idCliente;
    $presupuesto->idTipoDocumento = $req->idTipoDocumento;
    $presupuesto->nroDocumento = $req->nroDocumento;
    $presupuesto->obra = $req->obra;
    $presupuesto->ordenCompra = $req->ordenCompra;
    $presupuesto->idMoneda = $req->idMoneda;
    $presupuesto->valorVenta = $req->valorVenta;
    $presupuesto->impuesto = $req->impuesto;
    $presupuesto->totalNeto = $req->totalNeto;
    $presupuesto->saldo = $req->saldo;
    $presupuesto->save();
    return response()->json($presupuesto,201);
  }
}
