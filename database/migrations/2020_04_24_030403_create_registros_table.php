<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('Accion', 45);
            $table->integer('Cantidad');
            $table->integer('PrecioTotal')->nullable();
            $table->bigInteger('objetos_id');

            $table->index(["objetos_id"], 'fk_registros_objetos_idx');
                
            $table->timestamps();
        });

        /*Schema::table('registros', function (Blueprint $table) {
            $table->foreign('objetos_id', 'fk_registros_objetos_idx')
                ->references('id')->on('objetos')
                ->onDelete('no action')
                ->onUpdate('no action');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
