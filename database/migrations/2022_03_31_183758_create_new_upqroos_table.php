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
        Schema::create('new_upqroos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_Usuario');
            $table->string('dir_Imagen')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('cant_Reacciones');
            $table->integer('cant_Comentarios');
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
        Schema::dropIfExists('new_upqroos');
    }
};
