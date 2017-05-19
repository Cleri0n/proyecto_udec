<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recordatorios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asunto', 50);
            $table->date('fecha');
            $table->time('hora');
            $table->string('descripcion', 250);
            $table->integer('cuenta_id')->unsigned();

            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');

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
        Schema::dropIfExists('recordatorios');
    }
}
