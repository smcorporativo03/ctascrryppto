<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_detingresoalmacen_obj;

class tb_detingresoalmacen_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $detingresoalmacen = new tb_detingresoalmacen_obj();
    $detingresoalmacen->idIngresoAlmacen = $req->idIngresoAlmacen;
    $detingresoalmacen->idProducto = $req->idProducto;
    $detingresoalmacen->cantidad = $req->cantidad;
    $detingresoalmacen->precio = $req->precio;
    $detingresoalmacen->save();
    return response()->json($detingresoalmacen,201);
  }
}
