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
        Schema::create('administracion', function (Blueprint $table) {
            $table->id();
            $table->string('dosis');                                    
            $table->string('hora')->nullable();
            $table->time('horario'); 

            $table->unsignedBigInteger('tipo_administracion_id');


            $table->foreign('tipo_administracion_id')
                    ->references('id')
                    ->on('tipo_administracion')
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
        Schema::dropIfExists('administracion');
    }
};
