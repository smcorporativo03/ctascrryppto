<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_cliente_obj;

class tb_clientes_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_cliente_obj = tb_cliente_obj::get();
    $result = new class{};
    $result->clientes =  $tb_cliente_obj;
    return response()->json($result,200);
  }
}
