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
        Schema::create('medicamento_receta', function (Blueprint $table) {
            $table->id();

            
            $table->string('cantidad')->nullable();                                    
            $table->string('indicacion')->nullable();  
            //RELACION HACIA LOS MEDICAMENTOS
            $table->unsignedBigInteger('medicamento_id');
            $table->foreign('medicamento_id')
                    ->references('id')
                    ->on('medicamento')
                    ->onDelete('cascade');  
            
            //RELACION HACIA LOS MEDICAMENTOS
            $table->unsignedBigInteger('receta_id');
            $table->foreign('receta_id')
                    ->references('id')
                    ->on('receta')
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
        Schema::dropIfExists('medicamento_receta');
    }
};
