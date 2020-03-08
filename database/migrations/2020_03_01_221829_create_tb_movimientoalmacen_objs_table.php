<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMovimientoalmacenObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_movimientoalmacen_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->boolean('tipoMovimiento');
      $table->integer('idTipoDocumento')->unsigned();
      $table->string('nroDocumento',15);
      $table->integer('idProveedor')->unsigned();
      $table->datetime('fecha');
      $table->integer('idProducto')->unsigned();
      $table->integer('cantidad');
      $table->decimal('precio',13,4);
      $table->decimal('total',13,4);
      $table->timestamps();
      $table->foreign('idTipoDocumento')->references('id')->on('tb_tipodocumento_objs');
      $table->foreign('idProveedor')->references('id')->on('tb_proveedor_objs');
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
    Schema::dropIfExists('tb_movimientoalmacen_objs');
  }
}
