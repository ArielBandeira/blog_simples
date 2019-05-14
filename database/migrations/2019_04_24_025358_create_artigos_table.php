<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('titulo', 80)->unique();
            $table->bigIncrements('id_autor')->unique();
            $table->text('conteudo');
            $table->string('imagem', 80)->unique();

            $table->unsignedInteger('id_autor');
            $table->foreign('id_autor')->references('id')->on('autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
}
