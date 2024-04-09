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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->String("nome", 100);
            $table->enum("cor", ["preto","branco","ciza","azul","verde",]);
            $table->String("fabricante", 100);
            $table->decimal("preco","9","2");//nome, qtd de digitos, casas decimais
            $table->year("ano_fabricacao");
            $table->year("ano_modelo");
            $table->String("placa", 100)->unique();
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
        Schema::dropIfExists('veiculos');
    }
};
