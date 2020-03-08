<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_formapago_obj;

class tb_formapago_controller extends Controller
{
  public function store(Request $req){
    $formapago = new tb_formapago_obj();
    $formapago->descripcion = $req->descripcion;
    $formapago->abreviatura = $req->abreviatura;
    $formapago->save();
    return response()->json($formapago,201);
  }
}
