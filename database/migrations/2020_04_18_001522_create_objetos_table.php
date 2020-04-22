<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos', function (Blueprint $table) {
            $table->id();
            $table->string('Referencia');
            $table->string('Nombre')->comment('Nombre del objeto');
            $table->text('Descripcion')->nullable()->comment('Descripcion del producto. Puede estar vacio');
            $table->unsignedInteger('Precio')->comment('Precio por unidad');
            $table->unsignedInteger('Cantidad')->nullable()->default('0');
            $table->timestamps();
            
            $table->unique(["Referencia"], 'Referencia_UNIQUE');
            $table->unique(["Nombre"], 'Nombre_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetos');
    }
}
