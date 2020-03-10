<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_unidadmedida_obj;

class tb_undidadmedidas_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_unidadmedida_obj = tb_unidadmedida_obj::get();
    $result = new class{};
    $result->tiposunidadmedida =  $tb_unidadmedida_obj;
    return response()->json($result,200);
  }
}
