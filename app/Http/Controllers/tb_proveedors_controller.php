<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_proveedor_obj;

class tb_proveedors_controller extends Controller
{
  public function index(){
    $tb_proveedor_obj = tb_proveedor_obj::get();
    $result = new class{};
    $result->proveedores =  $tb_proveedor_obj;
    return response()->json($result,200);
  }
}
