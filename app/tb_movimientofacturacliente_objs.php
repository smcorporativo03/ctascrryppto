<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_movimientofacturacliente_objs extends Model
{
  public function tb_movimientofacturacliente_objs(){
    return $this->belongsTo('App\tb_movimientofacturacliente_objs');
  }
}
