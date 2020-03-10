<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_movimientoalmacen_obj;

class tb_movimientoalmacen_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $movimientoalmacen = new tb_movimientoalmacen_obj();
    $movimientoalmacen->tipoMovimiento = $req->tipoMovimiento;
    $movimientoalmacen->idTipoDocumento = $req->idTipoDocumento;
    $movimientoalmacen->nroDocumento = $req->nroDocumento;
    $movimientoalmacen->idProveedor = $req->idProveedor;
    $movimientoalmacen->fecha = $req->fecha;
    $movimientoalmacen->idProducto = $req->idProducto;
    $movimientoalmacen->cantidad = $req->cantidad;
    $movimientoalmacen->precio = $req->precio;
    $movimientoalmacen->total = $req->total;
    $movimientoalmacen->save();
    return response()->json($movimientoalmacen,201);
  }
}
