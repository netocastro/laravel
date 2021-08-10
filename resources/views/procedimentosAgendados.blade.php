<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>
<body>

      <a href="{{route('view.home')}}">Voltar</a>
      <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column;">
            <h1>Lista de Procedimentos</h1>
            @foreach($agenda as $cliente)

                  <div>Cliente: {{$cliente->nomeCliente()}} </div>
                  <div>Procedimento: {{$cliente->nomeProcedimento()}} </div>
                  <div>valor: {{$cliente->valor}} </div>
                  <div>Porcentagem do especialista: {{$cliente->parte_do_especialista}} </div>
                
                  ---------------------------------
            
            @endforeach
      </div>
</body>
</html>