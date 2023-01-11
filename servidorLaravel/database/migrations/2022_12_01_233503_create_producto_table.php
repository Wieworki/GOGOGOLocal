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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo');
            $table->unsignedBigInteger('id_editorial');
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('id_tipo')
               ->references('id')->on('tipo_producto')->onDelete('cascade');
            $table->foreign('id_editorial')
               ->references('id')->on('editorial')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
