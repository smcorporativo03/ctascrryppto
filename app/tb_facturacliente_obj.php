<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_facturacliente_obj extends Model
{
  return $this->belongsTo('App\tb_facturacliente_obj');
}
