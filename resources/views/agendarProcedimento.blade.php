<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Agendamento</title>
</head>
<body>
      <a href="{{route('view.home')}}">Voltar</a>
    
      <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column">
            <h1>Agendar Procedimento</h1>
            <form action="{{route('post.agendandoProcedimento')}}" method="post">
                  @csrf

                  <label for="">Escolha o procedimento:</label>
                  <select name="procedimento">
                        @foreach($procedimentos as $procedimento)
                        <option value="{{$procedimento->id}}">{{$procedimento->nome}}</option>
                        @endforeach
                  </select><br>

                  <label for="">Escolha o Cliente:</label>
                  <select name="cliente">
                        @foreach($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                        @endforeach
                  </select><br>

                  <button type="submit">Agendar</button>
            </form>
      </div>
      
</body>
</html>