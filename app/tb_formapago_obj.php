<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_formapago_obj extends Model
{
  public function tb_formapago_obj(){
    return $this->belongsTo('App\tb_formapago_obj');
  }
}
