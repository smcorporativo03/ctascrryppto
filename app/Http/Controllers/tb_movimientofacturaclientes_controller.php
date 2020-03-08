<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_movimientofacturacliente_obj;

class tb_movimientofacturaclientes_controller extends Controller
{
  public function index(){
    $tb_movimientofacturacliente_obj = tb_movimientofacturacliente_obj::get();
    $result = new class{};
    $result->movimientosfacturasclientes =  $tb_movimientofacturacliente_obj;
    return response()->json($result,200);
  }
}
