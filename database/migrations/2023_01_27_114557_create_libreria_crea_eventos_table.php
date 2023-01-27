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
        Schema::create('libreria_crea_eventos', function (Blueprint $table) {
            $table->unsignedBigInteger('idLibreria');
            $table->unsignedBigInteger('idEvento');
            $table->timestamps();

            $table->foreign('idLibreria')->references('idLibreria')->on('librerias');
            $table->foreign('idEvento')->references('idEvento')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libreria_crea_eventos');
    }
};
