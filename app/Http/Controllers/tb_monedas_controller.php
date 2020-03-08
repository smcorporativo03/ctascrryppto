<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_moneda_obj;

class tb_monedas_controller extends Controller
{
  public function index(){
    $tb_moneda_obj = tb_moneda_obj::get();
    $result = new class{};
    $result->monedas =  $tb_moneda_obj;
    return response()->json($result,200);
  }
}
