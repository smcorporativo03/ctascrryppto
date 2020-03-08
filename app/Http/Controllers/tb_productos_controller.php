<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_producto_obj;

class tb_productos_controller extends Controller
{
  public function index(){
    $tb_producto_obj = tb_producto_obj::get();
    $result = new class{};
    $result->productos =  $tb_producto_obj;
    return response()->json($result,200);
  }
}
