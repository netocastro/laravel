<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Especialistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('categoria_id')->constrained('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();   
        });

        DB::table('especialistas')->insert([
            ['nome' => 'Joao da Silva', 'categoria_id' => "1"],
            ['nome' => 'Maria Santana das Neves','categoria_id' => "2"],
            ['nome' => 'Maria de Lurdes', 'categoria_id' => "3"],
            ['nome' => 'Francisnei dos Santos', 'categoria_id' => "4"]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especialistas');
    }
}
