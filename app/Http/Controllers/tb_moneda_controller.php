<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_moneda_obj;

class tb_moneda_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $moneda = new tb_moneda_obj();
    $moneda->descripcion = $req->descripcion;
    $moneda->abreviatura = $req->abreviatura;
    $moneda->save();
    return response()->json($moneda,201);
  }
}
