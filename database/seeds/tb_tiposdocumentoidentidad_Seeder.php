<?php

use Illuminate\Database\Seeder;

class tb_tiposdocumentoidentidad_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tb_tipodocumentoidentidad_objs')->insert([[
        'descripcion'=>'DNI',
        'abreviatura'=>'DNI',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'RUC',
        'abreviatura'=>'RUC',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ]]);
    }
}
