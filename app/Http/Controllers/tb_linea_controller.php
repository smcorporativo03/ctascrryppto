<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_linea_obj;

class tb_linea_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $linea = new tb_linea_obj();
    $linea->descripcion = $req->descripcion;
    $linea->abreviatura = $req->abreviatura;
    $linea->save();
    return response()->json($linea,201);
  }
}
