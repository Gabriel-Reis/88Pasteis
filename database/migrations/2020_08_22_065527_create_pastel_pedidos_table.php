<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastelPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastel_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('pastel_id');
            $table->unsignedInteger('quantidade');
            $table->unsignedDecimal('total_parc', 5, 2);
            $table->timestamp('updated_at', 0)->nullable();
            $table->softDeletesTz('deleted_at', 0);
        });
        Schema::table('pastel_pedidos', function ($table) {
            $table->foreign('pedido_id')->references('id')->on('pastel_pedidos');
            $table->foreign('pastel_id')->references('id')->on('pasteis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pastel_pedidos');
    }
}
