<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterServicosTable extends Migration {

    public function up() {
        Schema::table('servicos', function (Blueprint $table) {
            $table->string('servico_icon');           
        });
    }

    public function down() {
        Schema::table('servicos', function (Blueprint $table) {
            $table->dropColumn('servico_icon');            
        });
    }
}
