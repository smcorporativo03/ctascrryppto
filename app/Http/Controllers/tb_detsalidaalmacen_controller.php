<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_detsalidaalmacen_obj;

class tb_detsalidaalmacen_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $detsalidaalmacen = new tb_detsalidaalmacen_obj();
    $detsalidaalmacen->idSalidaAlmacen = $req->idSalidaAlmacen;
    $detsalidaalmacen->idProducto = $req->idProducto;
    $detsalidaalmacen->cantidad = $req->cantidad;
    $detsalidaalmacen->precio = $req->precio;
    $detsalidaalmacen->save();
    return response()->json($detsalidaalmacen,201);
  }
}
