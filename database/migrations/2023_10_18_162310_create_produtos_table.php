<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('PRODUTO_NOME');
            $table->string('PRODUTO_DESC');
            $table->double('PRODUTO_PRECO');
            $table->double('PRODUTO_DESCONTO');
            $table->foreignId('CATEGORIA_ID')->constrained('categorias');
            $table->integer('PRODUTO_ATIVO');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
}
