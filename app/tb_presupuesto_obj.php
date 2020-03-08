<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_presupuesto_obj extends Model
{
  public function tb_presupuesto_obj(){
    return $this->belongsTo('App\tb_presupuesto_obj');
  }
}
