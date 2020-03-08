<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_movimientofacturacliente_obj extends Model
{
  public function tb_movimientofacturacliente_obj(){
    return $this->belongsTo('App\tb_movimientofacturacliente_obj');
  }
}
