<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Agenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('procedimento_id')->constrained('procedimentos')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('valor');
            $table->decimal('parte_do_especialista');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('agenda')->insert([
            ['cliente_id' => 1, 'procedimento_id' => 1, 'valor' => "20.00", "parte_do_especialista" => '4.00']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
