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
            $table->string('slug')->nullable();                        
            $table->integer('edad')->nullable();   
            $table->string('telefono')->nullable();            
            $table->string('email')->unique();         
            $table->string('direccion')->unique(); 

            
            $table->unsignedBigInteger('sexo_id');
            $table->foreign('sexo_id')
                    ->references('id')
                    ->on('sexo')
                    ->onDelete('cascade');
            
             //RELACION HACIA LOS MEDICOS
             $table->unsignedBigInteger('users_id');
             $table->foreign('users_id')
                     ->references('id')
                     ->on('users')
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
