<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_cliente_obj extends Model
{
  return $this->belongsTo('App\tb_cliente_obj');
}
