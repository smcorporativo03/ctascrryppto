<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_movimientoalmacen_obj extends Model
{
  public function tb_movimientoalmacen_obj(){
    return $this->belongsTo('App\tb_movimientoalmacen_obj');
  }
}
