<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbIngresoalmacenObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_ingresoalmacen_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->datetime('fecha');
      $table->integer('idProveedor')->nullable()->unsigned();
      $table->integer('idTipoDocumento')->unsigned();
      $table->string('nroDocumento',15);
      $table->integer('idTipoDocumentoRef')->unsigned();
      $table->string('nroDocumentoRef',15);
      $table->integer('idMoneda')->unsigned();
      $table->decimal('valorVenta',13,4);
      $table->decimal('impuesto',13,4);
      $table->decimal('totalNeto',13,4);
      $table->boolean('estado')->default(true);;
      $table->string('observaciones',250)->nullable();
      $table->timestamps();
      $table->foreign('idProveedor')->references('id')->on('tb_proveedor_objs');
      $table->foreign('idTipoDocumento')->references('id')->on('tb_tipodocumento_objs');
      $table->foreign('idTipoDocumentoRef')->references('id')->on('tb_tipodocumento_objs');
      $table->foreign('idMoneda')->references('id')->on('tb_moneda_objs');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('tb_ingresoalmacen_objs');
  }
}
