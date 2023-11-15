<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('CATEGORIA_NOME');
            $table->string('CATEGORIA_DESC');
            $table->integer('CATEGORIA_ATIVO');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
}

