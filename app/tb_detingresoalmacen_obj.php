<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_detingresoalmacen_obj extends Model
{
  public function tb_detingresoalmacen_obj(){
    return $this->belongsTo('App\tb_detingresoalmacen_obj');
  }
}
