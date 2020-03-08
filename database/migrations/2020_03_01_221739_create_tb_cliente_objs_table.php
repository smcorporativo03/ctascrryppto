<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbClienteObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_cliente_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->integer('idTipoDocumentoIdentidad')->unsigned();
      $table->string('nroDocumento',15);
      $table->string('nombre',50);
      $table->string('celular',25)->nullable();
      $table->string('telefono',25)->nullable();
      $table->string('direccion',50)->nullable();
      $table->string('correo',50)->nullable();
      $table->boolean('estado')->default(true);;
      $table->string('observacion',100)->nullable();
      $table->timestamps();
      $table->foreign('idTipoDocumentoIdentidad')->references('id')->on('tb_tipodocumentoidentidad_objs');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('tb_cliente_objs');
  }
}
