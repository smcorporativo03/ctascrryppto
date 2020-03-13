<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_movimientopresupuesto_obj;
class tb_movimientopresupuestos_controller extends Controller
{
  public function index(){
    $tb_movimientopresupuesto_obj = tb_movimientopresupuesto_obj::get();
    $result = new class{};
    $result->movimientospresupuesto =  $tb_movimientopresupuesto_obj;
    return response()->json($result,200);
  }
}
