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
        Schema::create('ejemplar_intercambia_ejemplars', function (Blueprint $table) {
            $table->unsignedBigInteger('idEjemplar1');
            $table->unsignedBigInteger('idEjemplar2');
            $table->timestamps();

            $table->foreign('idEjemplar1')->references('idEjemplar')->on('ejemplars');
            $table->foreign('idEjemplar2')->references('idEjemplar')->on('ejemplars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejemplar_intercambia_ejemplars');
    }
};
