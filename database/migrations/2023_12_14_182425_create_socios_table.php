<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('tipo', ['silver', 'gold']);
            $table->string('endereco')->nullable();
            // Adicione os outros campos necessários para o endereço, se desejado
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('socios');
    }
}
