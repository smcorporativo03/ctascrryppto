<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_banco_obj;

class tb_bancos_controller extends Controller
{
  public function index(){
    $tb_banco_obj = tb_banco_obj::get();
    $result = new class{};
    $result->bancos =  $tb_banco_obj;
    return response()->json($result,200);
  }
}