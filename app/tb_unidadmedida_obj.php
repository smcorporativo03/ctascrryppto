<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_unidadmedida_obj extends Model
{
  public function tb_unidadmedida_obj(){
    return $this->belongsTo('App\tb_unidadmedida_obj');
  }
}
