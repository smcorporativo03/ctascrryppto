<?php

use Illuminate\Database\Seeder;

class tb_tiposdocumento_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tb_tipodocumento_objs')->insert([[
        'descripcion'=>'Factura',
        'abreviatura'=>'Factura',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'Boleta de venta',
        'abreviatura'=>'Boleta',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'Guía de Remisión',
        'abreviatura'=>'G/Remisión',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'Guía de Ingreso',
        'abreviatura'=>'G/Ingreso',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'Guía de salida',
        'abreviatura'=>'G/Salida',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'Presupuesto',
        'abreviatura'=>'Presupuesto',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'descripcion'=>'Orden de compra',
        'abreviatura'=>'O/Compra',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ]]);
    }
}
