<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_condicionventa_obj extends Model
{
  public function tb_condicionventa_obj(){
    return $this->belongsTo('App\tb_condicionventa_obj');
  }
}
