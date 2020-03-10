<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_movimientofacturaproveedor_obj;

class tb_movimientofacturaproveedors_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_movimientofacturaproveedor_obj = tb_movimientofacturaproveedor_obj::get();
    $result = new class{};
    $result->movimientosfacturaproveedor =  $tb_movimientofacturaproveedor_obj;
    return response()->json($result,200);
  }
}
