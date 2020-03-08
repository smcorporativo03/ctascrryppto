<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSublineaObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_sublinea_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
      $table->integer('idLinea');
      $table->string('descripcion',25);
      $table->string('abreviatura',15);
      $table->boolean('estado')->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('tb_sublinea_objs');
  }
}
