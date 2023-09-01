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
        
        Schema::create('receta', function (Blueprint $table) {
             
            $table->id();  //       
             $table->string('ciudad')->nullable();
            $table->date('fecha')->nullable();  
            $table->string('historia',10)->nullable();           
            $table->enum('aler',[1,2])->default(1); 
            $table->string('alergia')->nullable();   
            $table->string('signos')->nullable();                    
            $table->longtext('sugerencia')->nullable(); 
            $table->string('medico')->nullable();     
            
            
            //RELACION HACIA LOS MEDICOS
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');       
            
                    
            
            
                        
            //RELACION HACIA LOS CIE-10
            $table->unsignedBigInteger('diagnosticoscie10_id');
            $table->foreign('diagnosticoscie10_id')
                    ->references('id')
                    ->on('diagnosticoscie10')
                    ->onDelete('cascade');  
            
            //RELACION HACIA LOS PACIENTES
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')
                    ->references('id')
                    ->on('paciente')
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
        Schema::dropIfExists('receta');
    }
};
