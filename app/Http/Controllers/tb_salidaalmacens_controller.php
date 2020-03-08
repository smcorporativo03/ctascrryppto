<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_salidaalmacen_obj;

class tb_salidaalmacens_controller extends Controller
{
  public function index(){
    $tb_salidaalmacen_obj = tb_salidaalmacen_obj::get();
    $result = new class{};
    $result->salidasalmacen =  $tb_salidaalmacen_obj;
    return response()->json($result,200);
  }
}
