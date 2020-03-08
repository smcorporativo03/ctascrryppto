<?php

use Illuminate\Database\Seeder;

class tb_lineas_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    DB::table('tb_linea_objs')->insert([[
      'descripcion'=>'Cables',
      'abreviatura'=>'Cables',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ],[
      'descripcion'=>'Tubos',
      'abreviatura'=>'Tubos',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ]]);
  }
}
