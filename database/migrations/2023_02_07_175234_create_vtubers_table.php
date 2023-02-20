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
        //esta funcion crea la tabla vtubers con las columnas que yo decida
        //php artisan make:migration create_nombre_table **nombre sugerido
        Schema::create('vtubers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname');
            $table->string('fanname');
            $table->string('oshimark');
            $table->string('company');
            $table->string('image');//dsp lo arreglo
            $table->string('clip');
            $table->longText('description');
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
        Schema::dropIfExists('vtubers');
    }
};
