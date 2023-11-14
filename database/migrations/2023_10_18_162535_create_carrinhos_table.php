<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrinhoProdutoTable extends Migration
{
    public function up(): void
    {
        Schema::create('carrinho_produto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrinho_id');
            $table->unsignedBigInteger('produto_id');
            $table->integer('ITEM_QTD');
            $table->timestamps();

            $table->foreign('carrinho_id')->references('id')->on('carrinhos')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carrinho_produto');
    }
}
