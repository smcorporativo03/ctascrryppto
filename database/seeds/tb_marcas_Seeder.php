<?php

use Illuminate\Database\Seeder;

class tb_marcas_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('tb_marca_objs')->insert([[
      'descripcion'=>'B-Ticino',
      'abreviatura'=>'B-Ticino',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ]]);
  }
}
