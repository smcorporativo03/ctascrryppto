<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_tipodocumento_obj extends Model
{
  public function tb_tipodocumento_obj(){
    return $this->belongsTo('App\tb_tipodocumento_obj');
  }
}
