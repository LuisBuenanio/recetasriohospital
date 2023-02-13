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
        Schema::create('subgruposcie10', function (Blueprint $table) {
            $table->id();
            $table->string('clave',8)->nullable(); 
            $table->string('descripcion')->nullable();

            $table->unsignedBigInteger('gruposcie10_id');

            $table->foreign('gruposcie10_id')
                    ->references('id')
                    ->on('gruposcie10')
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
        Schema::dropIfExists('subgruposcie10');
    }
};
