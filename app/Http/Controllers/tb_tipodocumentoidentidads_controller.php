<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_tipodocumentoidentidad_obj;

class tb_tipodocumentoidentidads_controller extends Controller
{
  public function index(){
    $tb_tipodocumentoidentidad_obj = tb_tipodocumentoidentidad_obj::get();
    $result = new class{};
    $result->tiposdocumentoidentidad =  $tb_tipodocumentoidentidad_obj;
    return response()->json($result,200);
  }
}
