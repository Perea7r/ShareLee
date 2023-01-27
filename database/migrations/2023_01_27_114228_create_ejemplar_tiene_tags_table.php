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
        Schema::create('ejemplar_tiene_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('idEjemplar');
            $table->unsignedBigInteger('idTag');
            $table->timestamps();

            $table->foreign('idEjemplar')->references('idEjemplar')->on('ejemplars');
            $table->foreign('idTag')->references('idTag')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejemplar_tiene_tags');
    }
};
