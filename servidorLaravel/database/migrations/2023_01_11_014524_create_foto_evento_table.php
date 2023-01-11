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
        Schema::create('foto_evento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_edicion');
            $table->string('nombre');
            $table->string('ruta');
            $table->timestamps();

            $table->foreign('id_edicion')
               ->references('id')->on('edicion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto_evento');
    }
};
