<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_marca_obj extends Model
{
  public function tb_marca_obj(){
    return $this->belongsTo('App\tb_marca_obj');
  }
}
