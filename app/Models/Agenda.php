<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agenda";
    use HasFactory;

    public function nomeCliente()
    {
        return Clientes::find($this->cliente_id)->nome;
    }

    public function nomeProcedimento()
    {
        return Procedimentos::find($this->procedimento_id)->nome;
    }
}
