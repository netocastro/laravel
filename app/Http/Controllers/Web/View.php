<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Clientes;
use App\Models\Procedimentos;
use App\Models\User;

use Illuminate\Http\Request;

class View extends Controller
{
    public function home()
    {
        $clientes = Clientes::all();
        return view('welcome', ['clientes' => $clientes]);
    }

    public function registrarUsuario()
    {
        return view('registrarUsuario');
    }
    public function listaDeClientes()
    {
        $clientes = Clientes::all();

        return view('listaDeClientes', ['clientes' => $clientes]);
    }

    public function agendarProcedimento()
    {
        $procedimentos = Procedimentos::all();
        $clientes = Clientes::all();

        return view('agendarProcedimento',[
        "procedimentos" => $procedimentos,
        "clientes" => $clientes
        ]);
    }

    public function listaDeProcedimentos()
    {
        $procedimentos = Procedimentos::all();
        $users = User::all();
        return view('listaDeProcedimentos',[
            'procedimentos' => $procedimentos,
            'users' => $users 
        ]);
    }

    public function procedimentosAgendados()
    {
        return view('procedimentosAgendados',[
            'agenda' => Agenda::all()
        ]);
    }
}
