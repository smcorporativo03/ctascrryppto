<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_tipoddocumento_obj;

class tb_tipodocumento_controller extends Controller
{
  public function store(Request $req){
    $tipodocumento = new tb_tipoddocumento_obj();
    $tipodocumento->descripcion = $req->descripcion;
    $tipodocumento->abreviatura = $req->abreviatura;
    $tipodocumento->save();
    return response()->json($tipodocumento,201);
  }
}
