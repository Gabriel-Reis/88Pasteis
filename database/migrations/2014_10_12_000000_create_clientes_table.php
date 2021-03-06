<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('telefone');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cpf');
            $table->string('cidade');
            $table->string('estado');
            $table->date('data_nasc');
            $table->unsignedInteger('tipo');
            $table->timestamp('data_cadastro');
            $table->timestamp('updated_at');
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletesTz('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Clientes');
    }
}
