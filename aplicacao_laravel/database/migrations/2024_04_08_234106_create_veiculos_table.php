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
            $table->unsignedBigInteger("fabricante_id");
            $table->String("nome", 100);
            $table->enum("cor", ["preto","branco","ciza","azul","verde",]);
            $table->decimal("preco","9","2");//nome, qtd de digitos, casas decimais
            $table->year("ano_fabricacao");
            $table->year("ano_modelo");
            $table->String("placa", 100)->unique();
            $table->timestamps();
            //criando chave estrangeira                          //tabela
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');
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
