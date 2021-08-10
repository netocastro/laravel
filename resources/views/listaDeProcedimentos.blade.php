<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Lista de Procedimentos</title>
</head>
<body>
      <a href="{{route('view.home')}}">Voltar</a>
      <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column;">
            <h1>Tabela de preços</h1>

            @foreach($procedimentos as $procedimento)
            <div>{{$procedimento->nome}}: {{$procedimento->valor}}</div>
            @endforeach
      </div>
</body>
</html>

