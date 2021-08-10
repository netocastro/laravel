<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->rememberToken();
            $table->timestamps();   
        });

        DB::table('categorias')->insert([
            ['nome' =>  "Fisioterapia"],
            ['nome' =>  "Cardiologista"],
            ['nome' =>  "Dermatologista"],
            ['nome' =>  "Otorrinolaringologista"]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
