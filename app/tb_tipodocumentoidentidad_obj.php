<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_tipodocumentoidentidad_obj extends Model
{
  public function tb_tipodocumentoidentidad_obj(){
    return $this->belongsTo('App\tb_tipodocumentoidentidad_obj');
  }
}
