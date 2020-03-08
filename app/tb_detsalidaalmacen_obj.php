<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_detsalidaalmacen_obj extends Model
{
  public function tb_detsalidaalmacen_obj(){
    return $this->belongsTo('App\tb_detsalidaalmacen_obj');
  }
}
