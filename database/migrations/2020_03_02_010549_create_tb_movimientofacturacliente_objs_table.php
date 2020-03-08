<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMovimientofacturaclienteObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_movimientofacturacliente_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->boolean('tipoMovimiento');
      $table->integer('idFacturaCliente')->unsigned();
      $table->datetime('fecha');
      $table->integer('idFormaPago')->nullable()->unsigned();
      $table->integer('idBanco')->nullable()->unsigned();
      $table->decimal('valorVenta',13,4);
      $table->decimal('impuesto',13,4);
      $table->decimal('totalNeto',13,4);
      $table->timestamps();
      $table->foreign('idFacturaCliente')->references('id')->on('tb_facturacliente_objs');
      $table->foreign('idFormaPago')->references('id')->on('tb_formapago_objs');
      $table->foreign('idBanco')->references('id')->on('tb_banco_objs');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('tb_movimientofacturacliente_objs');
  }
}
