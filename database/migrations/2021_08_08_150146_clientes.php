<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('clientes')->insert([
            ['nome' => 'Amanda de Barros', 'cpf' => "00000000001"],
            ['nome' => 'Alvaro de Goes Monteiro', 'cpf' => "00000000002"],
            ['nome' => 'Luiza Amaral', 'cpf' => "00000000003"],
            ['nome' => 'Paulo Henrique Santos', 'cpf' => "00000000004"]

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
