<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_linea_obj;

class tb_lineas_controller extends Controller
{
  public function index(){
    $tb_linea_obj = tb_linea_obj::get();
    $result = new class{};
    $result->lineas =  $tb_linea_obj;
    return response()->json($result,200);
  }
}
