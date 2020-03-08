<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_banco_obj;

class tb_banco_controller extends Controller
{
  public function store(Request $req){
    $banco = new tb_banco_obj();
    $banco->descripcion = $req->descripcion;
    $banco->abreviatura = $req->abreviatura;
    $banco->save();
    return response()->json($banco,201);
  }
}
