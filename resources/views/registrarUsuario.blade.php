<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Registrar Usuário</title>
</head>
<body>
      <a href="{{route('view.home')}}">Voltar</a>
      <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column;">
            <h1> registrar usuário</h1>

            <form action="{{route('post.registrandoUsuario')}}" method="post">
                  @csrf
                  <label for="">Usuário</label>
                  <input type="text" name="nome">
      
                  <label for="">CPF</label>
                  <input type="text" name="cpf">
                  
                  <button type="submit">Cadastrar</button>
            </form>
      </div>
</body>
</html>