<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_movimientopresupuesto_obj extends Model
{
  return $this->belongsTo('App\tb_movimientopresupuesto_obj');
}
