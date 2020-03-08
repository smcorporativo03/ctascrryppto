<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_linea_obj extends Model
{
  public function tb_linea_obj(){
    return $this->belongsTo('App\tb_linea_obj');
  }
}
