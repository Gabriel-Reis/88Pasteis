<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasteisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasteis', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedDecimal('preco_unit', 4, 2);
            $table->string('foto')->nullable();
            $table->string('descricao');
            $table->boolean('salgado');
            $table->boolean('disponivel');
            $table->string('categoria');
            $table->timestamps(); //created_at, updated_at
            $table->softDeletesTz('deleted_at', 0);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasteis');
    }
}
