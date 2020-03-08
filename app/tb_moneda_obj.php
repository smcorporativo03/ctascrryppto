<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_moneda_obj extends Model
{
  public function tb_moneda_obj(){
    return $this->belongsTo('App\tb_moneda_obj');
  }
}
