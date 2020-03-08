<?php

use Illuminate\Database\Seeder;

class tb_unidadesmedida_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tb_unidadmedida_objs')->insert([[
        'descripcion'=>'Unidades',
        'abreviatura'=>'Unidades',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'Galones',
        'abreviatura'=>'Galones',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'Cajas',
        'abreviatura'=>'Cajas',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ]]);
    }
}
