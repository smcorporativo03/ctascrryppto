<?php

use Illuminate\Database\Seeder;

class tb_monedas_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('tb_moneda_objs')->insert([[
      'descripcion'=>'Soles',
      'abreviatura'=>'Soles',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ],[
      'descripcion'=>'Dolares',
      'abreviatura'=>'Dolares',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ]]);
  }
}
