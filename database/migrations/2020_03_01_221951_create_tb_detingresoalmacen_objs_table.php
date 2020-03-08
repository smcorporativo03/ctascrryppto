<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDetingresoalmacenObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_detingresoalmacen_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->integer('idIngresoAlmacen')->unsigned();
      $table->integer('idProducto')->unsigned();
      $table->integer('cantidad');
      $table->decimal('precio',13,4);
      $table->timestamps();
      $table->foreign('idIngresoAlmacen')->references('id')->on('tb_ingresoalmacen_objs');
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
    Schema::dropIfExists('tb_detingresoalmacen_objs');
  }
}
