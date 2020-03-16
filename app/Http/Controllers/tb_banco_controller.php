<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_banco_obj;

class tb_banco_controller extends Controller
{
  header('Access-Control-Allow-Methods: OPTIONS,POST,GET')
  public function store(Request $req){
    $banco = new tb_banco_obj();
    $banco->descripcion = $req->descripcion;
    $banco->abreviatura = $req->abreviatura;
    $banco->estado = 1;
    $banco->save();
    return response()->json($banco,201);
  }
  public function index(){
    $tb_banco_obj = tb_banco_obj::get();
    $result = $tb_banco_obj;
    return response()->json($result,200);
  }
}
