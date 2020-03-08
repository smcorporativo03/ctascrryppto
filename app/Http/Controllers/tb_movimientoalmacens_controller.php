<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_movimientoalmacen_obj;

class tb_movimientoalmacens_controller extends Controller
{
  public function index(){
    $tb_movimientoalmacen_obj = tb_movimientoalmacen_obj::get();
    $result = new class{};
    $result->movimientosalmacen =  $tb_movimientoalmacen_obj;
    return response()->json($result,200);
  }
}
