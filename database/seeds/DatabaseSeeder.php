<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(tb_bancos_Seeder::class);
      $this->call(tb_lineas_Seeder::class);
      $this->call(tb_marcas_Seeder::class);
      $this->call(tb_monedas_Seeder::class);
      $this->call(tb_sublineas_Seeder::class);
      $this->call(tb_tiposdocumento_Seeder::class);
      $this->call(tb_tiposdocumentoidentidad_Seeder::class);
      $this->call(tb_unidadesmedida_Seeder::class);
    }
}
