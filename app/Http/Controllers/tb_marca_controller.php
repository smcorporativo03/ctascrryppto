<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_marca_obj;

class tb_marca_controller extends Controller
{
  public function store(Request $req){
    $marca = new tb_marca_obj();
    $marca->descripcion = $req->descripcion;
    $marca->abreviatura = $req->abreviatura;
    $marca->save();
    return response()->json($marca,201);
  }
}
