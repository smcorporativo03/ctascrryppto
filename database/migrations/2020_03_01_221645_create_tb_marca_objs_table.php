<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMarcaObjsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tb_marca_objs', function (Blueprint $table) {
      $table->increments('id')->unsigned();
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
    Schema::dropIfExists('tb_marca_objs');
  }
}
