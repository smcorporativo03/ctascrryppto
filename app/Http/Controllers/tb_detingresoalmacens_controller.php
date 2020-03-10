<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_detingresoalmacen_obj;

class tb_detingresoalmacens_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_detingresoalmacen_obj = tb_detingresoalmacen_obj::get();
    $result = new class{};
    $result->detingresosalmacen =  $tb_detingresoalmacen_obj;
    return response()->json($result,200);
  }
}
