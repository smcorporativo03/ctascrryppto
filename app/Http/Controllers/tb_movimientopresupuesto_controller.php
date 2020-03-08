<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_movimientopresupuesto_obj;

class tb_movimientopresupuesto_controller extends Controller
{
  public function store(Request $req){
    $movimientopresupuesto = new tb_movimientopresupuesto_obj();
    $movimientopresupuesto->tipoMovimiento = $req->tipoMovimiento;
    $movimientopresupuesto->idPresupuesto = $req->idPresupuesto;
    $movimientopresupuesto->fecha = $req->fecha;
    $movimientopresupuesto->nroValorización = $req->nroValorización;
    $movimientopresupuesto->descripcion = $req->descripcion;
    $movimientopresupuesto->observaciones = $req->observaciones;
    $movimientopresupuesto->valorVenta = $req->valorVenta;
    $movimientopresupuesto->impuesto = $req->impuesto;
    $movimientopresupuesto->totalNeto = $req->totalNeto;
    $movimientopresupuesto->save();
    return response()->json($movimientopresupuesto,201);
  }
}
