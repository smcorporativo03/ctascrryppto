<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_banco_obj extends Model
{
  public function tb_banco_obj(){
    return $this->belongsTo('App\tb_banco_obj');
  }
}
