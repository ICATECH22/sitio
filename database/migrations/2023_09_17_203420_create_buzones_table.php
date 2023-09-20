<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuzonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buzones', function (Blueprint $table) {
            $table->id();
            $table->string('actividad', 250)->nullable();
            $table->text('comentario')->nullable();
            $table->string('archivo', 200)->nullable();
            $table->string('nombre', 200)->nullable();
            $table->string('email')->nullable();
            $table->string('telefono', 50)->nullable();
            $table->boolean('termino')->default(false);
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
        Schema::dropIfExists('buzones');
    }
}
