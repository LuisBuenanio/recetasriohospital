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
            $table->string('codigo', 20);
            $table->string('nombre');
            $table->string('slug')->nullable(); 
            $table->string('fabricante')->nullable();                    
            $table->integer('gramos')->nullable();  


            $table->unsignedBigInteger('tipo_medicamento_id');


            $table->foreign('tipo_medicamento_id')
                    ->references('id')
                    ->on('tipo_medicamento')
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
