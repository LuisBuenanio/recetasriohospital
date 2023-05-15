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
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 10)->nullable(); 
            $table->string('nombre');                         
            $table->date('fecha_nacimiento')->nullable();               
            $table->integer('edad')->nullable();  
            $table->string('telefono')->nullable();            
            $table->string('email')->unique()->nullable();         
            $table->string('direccion')->nullable(); 

            
            $table->unsignedBigInteger('sexo_id');
            $table->foreign('sexo_id')
                    ->references('id')
                    ->on('sexo')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('paciente');
    }
};
