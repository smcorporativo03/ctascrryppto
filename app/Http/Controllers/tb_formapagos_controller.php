<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_formapago_obj;

class tb_formapagos_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_formapago_obj = tb_formapago_obj::get();
    $result = new class{};
    $result->formaspago =  $tb_formapago_obj;
    return response()->json($result,200);
  }
}
