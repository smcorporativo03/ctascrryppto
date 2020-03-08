<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDetsalidaalmacenObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_detsalidaalmacen_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->integer('idSalidaAlmacen')->unsigned();
      $table->integer('idProducto')->unsigned();
      $table->integer('cantidad');
      $table->decimal('precio',13,4);
      $table->timestamps();
      $table->foreign('idSalidaAlmacen')->references('id')->on('tb_salidaalmacen_objs');
      $table->foreign('idProducto')->references('id')->on('tb_producto_objs');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('tb_detsalidaalmacen_objs');
  }
}
