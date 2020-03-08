<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_movimientofacturaproveedor_obj extends Model
{
  public function tb_movimientofacturaproveedor_obj(){
    return $this->belongsTo('App\tb_movimientofacturaproveedor_obj');
  }
}
