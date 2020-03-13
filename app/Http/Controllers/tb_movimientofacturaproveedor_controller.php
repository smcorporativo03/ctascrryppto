<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_movimientofacturaproveedor_obj;

class tb_movimientofacturaproveedor_controller extends Controller
{
  public function store(Request $req){
    $movimientofacturaproveedor = new tb_movimientofacturaproveedor_obj();
    $movimientofacturaproveedor->tipoMovimiento = $req->tipoMovimiento;
    $movimientofacturaproveedor->idFacturaProveedor = $req->idFacturaProveedor;
    $movimientofacturaproveedor->fecha = $req->fecha;
    $movimientofacturaproveedor->idFormaPago = $req->idFormaPago;
    $movimientofacturaproveedor->idmovimientofacturaproveedor = $req->idmovimientofacturaproveedor;
    $movimientofacturaproveedor->valorVenta = $req->valorVenta;
    $movimientofacturaproveedor->impuesto = $req->impuesto;
    $movimientofacturaproveedor->totalNeto = $req->totalNeto;
    $movimientofacturaproveedor->save();
    return response()->json($movimientofacturaproveedor,201);
  }
}
