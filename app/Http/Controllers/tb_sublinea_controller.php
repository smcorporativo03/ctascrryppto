<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_sublinea_obj;

class tb_sublinea_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(Request $req){
    $sublinea = new tb_sublinea_obj();
    $sublinea->idLinea = $req->idLinea;
    $sublinea->descripcion = $req->descripcion;
    $sublinea->abreviatura = $req->abreviatura;
    $sublinea->save();
    return response()->json($sublinea,201);
  }
}
