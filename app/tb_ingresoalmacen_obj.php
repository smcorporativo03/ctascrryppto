<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_ingresoalmacen_obj extends Model
{
  public function tb_ingresoalmacen_obj(){
    return $this->belongsTo('App\tb_ingresoalmacen_obj');
  }
}
