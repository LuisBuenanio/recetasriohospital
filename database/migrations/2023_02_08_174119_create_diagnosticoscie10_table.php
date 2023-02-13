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
        Schema::create('diagnosticoscie10', function (Blueprint $table) {
            $table->id();
            $table->string('clave',10)->nullable(); 
            $table->string('descripcion')->nullable();  
            
            
            
            $table->unsignedBigInteger('categoriascie10_id');

            $table->foreign('categoriascie10_id')
                    ->references('id')
                    ->on('categoriascie10')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosticoscie10');
    }
};
