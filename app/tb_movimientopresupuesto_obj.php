<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_movimientopresupuesto_obj extends Model
{
  public function tb_movimientopresupuesto_obj(){
    return $this->belongsTo('App\tb_movimientopresupuesto_obj');
  }
}
