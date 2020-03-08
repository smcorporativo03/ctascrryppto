<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMovimientopresupuestoObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_movimientopresupuesto_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->boolean('tipoMovimiento');
      $table->integer('idPresupuesto')->unsigned();
      $table->datetime('fecha');
      $table->string('nroValorización',15);
      $table->string('descripcion',50)->nullable();
      $table->string('observaciones',100)->nullable();
      $table->decimal('valorVenta',13,4);
      $table->decimal('impuesto',13,4);
      $table->decimal('totalNeto',13,4);
      $table->timestamps();
      $table->foreign('idPresupuesto')->references('id')->on('tb_presupuesto_objs');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('tb_movimientopresupuesto_objs');
  }
}
