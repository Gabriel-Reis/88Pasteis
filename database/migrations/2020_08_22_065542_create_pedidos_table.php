<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('status_pedido_id');
            $table->unsignedBigInteger('forma_pag_id');
            $table->string('cpf_nfp')->nullable();
            $table->unsignedBigInteger('cupom_id')->nullable();
            $table->unsignedDecimal('total', 5, 2);
            $table->string('obs')->nullable();
            $table->softDeletesTz('deleted_at', 0);
        });
        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('status_pedido_id')->references('id')->on('status_pedidos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('forma_pag_id')->references('id')->on('pagamentos');
            $table->foreign('cupom_id')->references('id')->on('cupons');
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
}
