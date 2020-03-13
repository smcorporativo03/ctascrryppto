<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_tipodocumentoidentidad_obj;

class tb_tipodocumentoidentidad_controller extends Controller
{
  public function store(Request $req){
    $tipodocumentoidentidad = new tb_tipodocumentoidentidad_obj();
    $tipodocumentoidentidad->descripcion = $req->descripcion;
    $tipodocumentoidentidad->abreviatura = $req->abreviatura;
    $tipodocumentoidentidad->save();
    return response()->json($tipodocumentoidentidad,201);
  }
}
