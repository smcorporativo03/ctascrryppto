<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_cliente_obj extends Model
{
  public function tb_cliente_obj(){
    return $this->belongsTo('App\tb_cliente_obj');
  }
}
