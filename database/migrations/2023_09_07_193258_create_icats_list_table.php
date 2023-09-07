<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcatsListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icats_list', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250)->nullable();
            $table->string('puesto', 250)->nullable();
            $table->string('icat', 100)->nullable();
            $table->boolean('asistencia')->default(false);
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
        Schema::dropIfExists('icats_list');
    }
}
