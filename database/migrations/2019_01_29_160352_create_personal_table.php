<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre");
            $table->string("apellidos");
            $table->string("email");
            $table->string("telefono");
            $table->string("descripcion");

            $table->unsignedInteger('fkidcargo');
            $table->foreign('fkidcargo')->references('id')->on('cargos');
            $table->boolean("estado");

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
        Schema::dropIfExists('personal');
    }
}
