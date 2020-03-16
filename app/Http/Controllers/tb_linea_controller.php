<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_linea_obj;

class tb_linea_controller extends Controller
{
  public function store(Request $req){
    $linea = new tb_linea_obj();
    $linea->descripcion = $req->descripcion;
    $linea->abreviatura = $req->abreviatura;
    $linea->estado = 1;
    $linea->save();
    return response()->json($linea,201);
  }
  public function index(){
    $tb_linea_obj = tb_linea_obj::get();
    $result =  $tb_linea_obj;
    return response()->json($result,200);
  }
}
