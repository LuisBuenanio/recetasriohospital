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
        Schema::create('medicamento', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre'); 
            $table->string('concentracion')->nullable();                    
            $table->string('tipo')->nullable();  

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
        Schema::dropIfExists('medicamento');
    }
};
