<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
          'codproduct'=>'OBJPR01',
          'name'=>'Producto de prueba',
          'description'=>'Descripción que detalla muchas caracterísitcas del producto.',
          'created_at'=> date("Y-m-d H:i:s"),
          'updated_at'=> date("Y-m-d H:i:s")
        ],[
          'codproduct'=>'OBJPR02',
          'name'=>'Producto de prueba 2',
          'description'=>'Descripción que detalla muchas caracterísitcas del producto 2.',
          'created_at'=> date("Y-m-d H:i:s"),
          'updated_at'=> date("Y-m-d H:i:s")
        ]]);
    }
}
