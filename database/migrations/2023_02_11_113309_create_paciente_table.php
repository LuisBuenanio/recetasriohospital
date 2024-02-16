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


            /* $table->string('apellido_paterno');
            $table->string('apellido_materno');

            // Agregar campos de información adicional del paciente
            $table->string('nacionalidad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ocupacion')->nullable();

            
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->unsignedBigInteger('canton_id')->nullable();
            $table->enum('estado_civil', ['Soltero/a', 'Casado/a', 'Divorciado/a', 'Viudo/a', 'Unión libre'])->nullable();
            $table->enum('instruccion', ['Sin instrucción', 'Básica', 'Bachiller', 'Superior', 'Especialidad'])->nullable();
         

            // Modificar campo 'cedula' para que pueda ser nulo y no tenga restricción de longitud
            $table->string('cedula')->nullable()->change();

            // Definir las relaciones con las tablas 'ciudad' y 'canton'
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('canton_id')->references('id')->on('cantones')->onDelete('cascade');
       */

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
