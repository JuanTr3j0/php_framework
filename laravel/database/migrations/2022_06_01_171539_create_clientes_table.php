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
        Schema::create('clientes', function (Blueprint $table) {
            /* Creating a table with the name clientes with the columns id, nombre, apellido, nit,
            telefono and timestamps. */
            $table  ->  id();
            $table  ->  string('nombre')->nullable;
            $table  ->  string('apellido')->nullable;
            $table  ->  string('nit')->nullable;
            $table  ->  string('telefono')->nullable;
            $table  ->  timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
