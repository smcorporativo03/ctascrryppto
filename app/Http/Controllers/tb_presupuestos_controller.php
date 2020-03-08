<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_presupuesto_obj;

class tb_presupuestos_controller extends Controller
{
  public function index(){
    $tb_presupuesto_obj = tb_presupuesto_obj::get();
    $result = new class{};
    $result->presupuestos =  $tb_presupuesto_obj;
    return response()->json($result,200);
  }
}
