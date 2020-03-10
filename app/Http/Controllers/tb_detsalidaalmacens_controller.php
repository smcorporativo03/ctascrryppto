<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_detsalidaalmacen_obj;

class tb_detsalidaalmacens_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_detsalidaalmacen_obj = tb_detsalidaalmacen_obj::get();
    $result = new class{};
    $result->detsalidasalmacen =  $tb_detsalidaalmacen_obj;
    return response()->json($result,200);
  }
}
