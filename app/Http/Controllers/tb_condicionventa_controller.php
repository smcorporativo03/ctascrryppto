<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_condicionventa_obj;

class tb_condicionventa_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $condicionventa = new tb_condicionventa_obj();
    $condicionventa->descripcion = $req->descripcion;
    $condicionventa->abreviatura = $req->abreviatura;
    $condicionventa->save();
    return response()->json($condicionventa,201);
  }
}
