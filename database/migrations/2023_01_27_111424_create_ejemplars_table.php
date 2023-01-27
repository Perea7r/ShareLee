<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejemplars', function (Blueprint $table) {
            $table->bigIncrements('idEjemplar');
            $table->unsignedBigInteger('idCategoria');
            $table->integer('sharelines');
            $table->string('idioma',10);
            $table->string('editorial',20);
            $table->string('estado',20);
            $table->string('foto',250);
            $table->string('descripcion',160);
            $table->string('formato',15);
            $table->string('autor',25);
            $table->string('titulo',70);
            $table->timestamps();

            $table->foreign('idCategoria')->references('idCategoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejemplars');
    }
};
