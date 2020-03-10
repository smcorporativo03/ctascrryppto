<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_facturaproveedor_obj;

class tb_facturaproveedor_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $facturaproveedor = new tb_facturaproveedor_obj();
    $facturaproveedor->fecha = $req->fecha;
    $facturaproveedor->idProveedor = $req->idProveedor;
    $facturaproveedor->idTipoDocumento = $req->idTipoDocumento;
    $facturaproveedor->nroDocumento = $req->nroDocumento;
    $facturaproveedor->idCondicionVenta = $req->idCondicionVenta;
    $facturaproveedor->idMoneda = $req->idMoneda;
    $facturaproveedor->valorVenta = $req->valorVenta;
    $facturaproveedor->impuesto = $req->impuesto;
    $facturaproveedor->totalNeto = $req->totalNeto;
    $facturaproveedor->saldo = $req->saldo;
    $facturaproveedor->save();
    return response()->json($facturaproveedor,201);
  }
}
