<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_proveedor_obj extends Model
{
  return $this->belongsTo('App\tb_proveedor_obj');
}
