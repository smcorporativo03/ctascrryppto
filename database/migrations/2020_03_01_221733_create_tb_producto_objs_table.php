<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductoObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_producto_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->string('codigoSKU',15)->nullable();
      $table->string('descripcion',50);
      $table->string('abreviatura',25);
      $table->integer('idSigubLinea')->unsigned();
      $table->integer('idUnidadMedida')->unsigned();
      $table->integer('idMarca')->nullable()->unsigned();
      $table->boolean('estado')->default(true);
      $table->string('observacion',100)->nullable();
      $table->timestamps();
      $table->foreign('idSubLinea')->references('id')->on('tb_sublinea_objs');
      $table->foreign('idUnidadMedida')->references('id')->on('tb_unidadmedida_objs');
      $table->foreign('idMarca')->references('id')->on('tb_marca_objs');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('tb_producto_objs');
  }
}
