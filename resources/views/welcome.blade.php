<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">

    <div>
        <a href="{{route('view.registrarUsuario')}}">Registrar Usuário</a><br>
        <a href="{{route('view.listaDeClientes')}}">Lista de clientes</a><br>
        <a href="{{route('view.listaDeProcedimentos')}}">Lista de Procedimentos</a><br>
        <a href="{{route('view.agendarProcedimento')}}">Marcar Procedimento</a><br>
        <a href="{{route('view.procedimentosAgendados')}}">Procedimentos Marcados</a><br>
    </div>development

</body>
</html>