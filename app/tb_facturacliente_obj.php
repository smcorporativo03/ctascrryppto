<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_facturacliente_obj extends Model
{
  public function tb_facturacliente_obj(){
    return $this->belongsTo('App\tb_facturacliente_obj');
  }
}
