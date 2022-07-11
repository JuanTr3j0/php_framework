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
        Schema::create('pedidos', function (Blueprint $table) {
            /* Creating a table with the following fields:
            - id
            - costo
            - descripcion_pedido
            - fecha_entrega
            - cliente_id
            - created_at
            - updated_at */
            $table->id();
            $table->float('costo')->nullable();
            $table->text('descripcion_pedido')->nullable();
            $table->date('fecha_entrega');
            $table->unsignedbigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('pedidos');
    }
};
