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
        Schema::create('lesion_formulario008', function (Blueprint $table) {
            $table->id();

            
            $table->integer('posicion_x');
            $table->integer('posicion_y');

            $table->unsignedBigInteger('formulario008_id');
            $table->unsignedBigInteger('lesion_id');
        
            $table->foreign('formulario008_id')->references('id')->on('formulario008')->onDelete('restrict');
            $table->foreign('lesion_id')->references('id')->on('lesion')->onDelete('restrict');  
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
        Schema::dropIfExists('lesion_formulario008');
    }
};
