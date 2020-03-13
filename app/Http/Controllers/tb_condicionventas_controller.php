<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_condicionventa_obj;

class tb_condicionventas_controller extends Controller
{
  public function index(){
    $tb_condicionventa_obj = tb_condicionventa_obj::get();
    $result = new class{};
    $result->condicionesventas =  $tb_condicionventa_obj;
    return response()->json($result,200);
  }
}
