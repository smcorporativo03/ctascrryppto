<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_moneda_obj extends Model
{
  return $this->belongsTo('App\tb_moneda_obj');
}
