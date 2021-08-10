<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Procedimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('valor');
            $table->decimal('porcentagem_especialista');
            $table->rememberToken();
            $table->timestamps();   
        });

        DB::table('procedimentos')->insert([
            ['categoria_id' =>'1','nome' => 'massagem', 'valor' => "20.00", "porcentagem_especialista" => 20],
            ['categoria_id' =>'1','nome' => 'Ventosa', 'valor' => "30.00", "porcentagem_especialista" => 20],
            ['categoria_id' =>'2','nome' => 'Angioplastia', 'valor' => "200.00", "porcentagem_especialista" => 20],
            ['categoria_id' =>'2','nome' => 'Valvoplastia', 'valor' => "180.00", "porcentagem_especialista" => 20],
            ['categoria_id' =>'3','nome' => 'Actinoterapia', 'valor' => "180.00", "porcentagem_especialista" => 20],
            ['categoria_id' =>'3','nome' => 'Depilação a laser', 'valor' => "120.00", "porcentagem_especialista" => 20],
            ['categoria_id' =>'4','nome' => 'Traqueostomia', 'valor' => "310.00", "porcentagem_especialista" => 20],
            ['categoria_id' =>'4','nome' => 'Adenoidectomia', 'valor' => "280.00", "porcentagem_especialista" => 20],

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedimentos');
    }
}
