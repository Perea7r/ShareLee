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
        Schema::create('libreria_esta_ciudads', function (Blueprint $table) {
            $table->unsignedBigInteger('idLibreria');
            $table->unsignedBigInteger('idCiudad');
            $table->timestamps();

            $table->foreign('idLibreria')->references('idLibreria')->on('librerias');
            $table->foreign('idCiudad')->references('idCiudad')->on('ciudads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libreria_esta_ciudads');
    }
};
