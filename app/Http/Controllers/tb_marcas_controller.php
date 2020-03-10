<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_marca_obj;

class tb_marcas_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_marca_obj = tb_marca_obj::get();
    $result = new class{};
    $result->marcas =  $tb_marca_obj;
    return response()->json($result,200);
  }
}
