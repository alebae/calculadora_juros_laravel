<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulacaos', function (Blueprint $table) {
            $table->id();
            $table->decimal('tx_juros', 3, 2);
            $table->decimal('valor_parcela', 5, 2);
            $table->tinyInteger('tipo_juros');
            $table->tinyInteger('qtde_parcelas');
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
        Schema::dropIfExists('simulacaos');
    }
}
