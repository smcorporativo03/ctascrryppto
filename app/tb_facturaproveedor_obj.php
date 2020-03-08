<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_facturaproveedor_obj extends Model
{
  public function tb_facturaproveedor_obj(){
    return $this->belongsTo('App\tb_facturaproveedor_obj');
  }
}
