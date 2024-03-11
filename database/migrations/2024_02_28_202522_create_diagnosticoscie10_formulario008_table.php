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
        Schema::create('diagnosticoscie10_formulario008', function (Blueprint $table) {
            
            $table->id();

            $table->unsignedBigInteger('diagnosticoscie10_id');
            $table->unsignedBigInteger('formulario008_id');

            $table->foreign('diagnosticoscie10_id')->references('id')->on('diagnosticoscie10')->onDelete('restrict');  
            $table->foreign('formulario008_id')->references('id')->on('formulario008')->onDelete('restrict');
           
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
        Schema::dropIfExists('diagnosticoscie10_formulario008');
    }
};
