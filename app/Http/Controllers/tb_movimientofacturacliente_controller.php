<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_movimientofacturacliente_obj;

class tb_movimientofacturacliente_controller extends Controller
{
  public function store(Request $req){
    $movimientofacturacliente = new tb_movimientofacturacliente_obj();
    $movimientofacturacliente->tipoMovimiento = $req->tipoMovimiento;
    $movimientofacturacliente->idFacturaCliente = $req->idFacturaCliente;
    $movimientofacturacliente->fecha = $req->fecha;
    $movimientofacturacliente->idFormaPago = $req->idFormaPago;
    $movimientofacturacliente->idmovimientofacturacliente = $req->idmovimientofacturacliente;
    $movimientofacturacliente->valorVenta = $req->valorVenta;
    $movimientofacturacliente->impuesto = $req->impuesto;
    $movimientofacturacliente->totalNeto = $req->totalNeto;
    $movimientofacturacliente->save();
    return response()->json($movimientofacturacliente,201);
  }
}
