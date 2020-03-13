<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_ingresoalmacen_obj;

class tb_ingresoalmacens_controller extends Controller
{
  public function index(){
    $tb_ingresoalmacen_obj = tb_ingresoalmacen_obj::get();
    $result = new class{};
    $result->ingresosalmacen =  $tb_ingresoalmacen_obj;
    return response()->json($result,200);
  }
}
