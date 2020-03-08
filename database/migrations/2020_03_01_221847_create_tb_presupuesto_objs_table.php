<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPresupuestoObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_presupuesto_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->datetime('fecha');
      $table->integer('idCliente')->unsigned();
      $table->integer('idTipoDocumento')->unsigned();
      $table->string('nroDocumento',15);
      $table->string('obra',100);
      $table->string('ordenCompra',15);
      $table->integer('idMoneda')->unsigned();
      $table->decimal('valorVenta',13,4);
      $table->decimal('impuesto',13,4);
      $table->decimal('totalNeto',13,4);
      $table->decimal('saldo',13,4);
      $table->boolean('estado')->default(true);;
      $table->timestamps();
      $table->foreign('idCliente')->references('id')->on('tb_cliente_objs');
      $table->foreign('idTipoDocumento')->references('id')->on('tb_tipodocumento_objs');
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
    Schema::dropIfExists('tb_presupuesto_objs');
  }
}
