<?php

use Illuminate\Database\Seeder;

class tb_sublineas_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('tb_sublinea_objs')->insert([[
      'idLinea'=>1,
      'descripcion'=>'Baja tensión',
      'abreviatura'=>'Baja tensión',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ],[
      'idLinea'=>1,
      'descripcion'=>'Media tensión',
      'abreviatura'=>'Media tensión',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ],[
      'idLinea'=>1,
      'descripcion'=>'Alta tensión',
      'abreviatura'=>'Alta tensión',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ],[
      'idLinea'=>2,
      'descripcion'=>'Agua',
      'abreviatura'=>'Agua',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ],[
      'idLinea'=>2,
      'descripcion'=>'Luz',
      'abreviatura'=>'Luz',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ]]);
  }
}
