<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_salidaalmacen_obj extends Model
{
  public function tb_salidaalmacen_obj(){
    return $this->belongsTo('App\tb_salidaalmacen_obj');
  }
}
