<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicoImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico_imgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('servicoimg_titulo');
            $table->string('servicoimg_descricao');
            $table->string('servicoimg_foto');
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
        Schema::drop('servico_imgs');
    }
}
