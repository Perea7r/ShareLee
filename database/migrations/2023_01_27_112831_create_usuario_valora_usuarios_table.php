<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_valora_usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('idUsuario1');
            $table->unsignedBigInteger('idUsuario2');
            $table->integer('valoracion');
            $table->timestamps();

            $table->foreign('idUsuario1')->references('idUsuario1')->on('usuarios');
            $table->foreign('idUsuario2')->references('idUsuario2')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_valora_usuarios');
    }
};
