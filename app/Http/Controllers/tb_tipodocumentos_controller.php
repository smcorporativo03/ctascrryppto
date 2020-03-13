<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_tipodocumento_obj;

class tb_tipodocumentos_controller extends Controller
{
  public function index(){
    $tb_tipodocumento_obj = tb_tipodocumento_obj::get();
    $result = new class{};
    $result->tiposdocumento =  $tb_tipodocumento_obj;
    return response()->json($result,200);
  }
}
