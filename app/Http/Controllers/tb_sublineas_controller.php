<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_sublinea_obj;
class tb_sublineas_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $tb_sublinea_obj = tb_sublinea_obj::get();
    $result = new class{};
    $result->sublineas =  $tb_sublinea_obj;
    return response()->json($result,200);
  }
}
