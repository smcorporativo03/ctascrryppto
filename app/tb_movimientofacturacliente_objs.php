<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_movimientofacturacliente_objs extends Model
{
  return $this->belongsTo('App\tb_movimientofacturacliente_objs');
}
