<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_producto_obj extends Model
{
  return $this->belongsTo('App\tb_producto_obj');
}
