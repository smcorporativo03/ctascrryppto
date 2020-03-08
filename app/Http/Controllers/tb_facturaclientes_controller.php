<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_facturacliente_obj;

class tb_facturaclientes_controller extends Controller
{
  public function index(){
    $tb_facturacliente_obj = tb_facturacliente_obj::get();
    $result = new class{};
    $result->facturasclientes =  $tb_facturacliente_obj;
    return response()->json($result,200);
  }
}
