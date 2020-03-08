<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_proveedor_obj extends Model
{
  public function tb_proveedor_obj(){
    return $this->belongsTo('App\tb_proveedor_obj');
  }
}
