<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_facturaproveedor_obj;

class tb_facturaproveedors_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_facturaproveedor_obj = tb_facturaproveedor_obj::get();
    $result = new class{};
    $result->facturasproveedor =  $tb_facturaproveedor_obj;
    return response()->json($result,200);
  }
}
