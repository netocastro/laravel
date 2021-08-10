<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Clientes;
use App\Models\Procedimentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Post extends Controller
{
    public function registrandoUsuario(Request $request)
    {
        $cliente = new Clientes();
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;

        $cliente->save();

        return redirect()->route('view.listaDeClientes');
    }

    public function agendandoProcedimento(Request $request)
    {
        $procedimento = Procedimentos::find($request->procedimento);
        $agendamento = new Agenda();

        $agendamento->cliente_id = $request->cliente;
        $agendamento->procedimento_id = $request->procedimento;
        $agendamento->valor = $procedimento->valor;
        $agendamento->parte_do_especialista = $procedimento->valor * ($procedimento->porcentagem_especialista / 100);

        $agendamento->save();

        return redirect()->route('view.procedimentosAgendados');
    }
}
