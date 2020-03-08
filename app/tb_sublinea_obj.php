<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_sublinea_obj extends Model
{
  public function tb_sublinea_obj(){
    return $this->belongsTo('App\tb_sublinea_obj');
  }
}
