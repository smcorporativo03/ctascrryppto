<?php

use Illuminate\Database\Seeder;

class tb_bancos_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('tb_banco_objs')->insert([[
      'descripcion'=>'BCP',
      'abreviatura'=>'BCP',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ],[
      'descripcion'=>'BBVA',
      'abreviatura'=>'BBVA',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ],[
      'descripcion'=>'Interbank',
      'abreviatura'=>'IBK',
      'created_at'=> date("Y-m-d H:i:s"),
      'updated_at'=> date("Y-m-d H:i:s")
    ]]);
  }
}
