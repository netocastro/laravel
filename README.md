<h1>Aplicação para o Backend para uma Clínica</h1>

>Em desenvolvimento

## Aplicação desenvolvida pra fins avaliativos

Esta é uma aplicação feita em laravel que simula o atendimento de um 
cliente em uma clínica onde ele pode realizar vários procedimentos com
vários especialistas.

Para iniciar o uso é necessário: 

+ Criar uma base de dados chamada "clinica" e depois, no terminal
dentro do diretorio raiz da aplicação, utilizar o comando: "php artisan migrate" (sem as aspas).

+ inciar o servidor apartir do comando no terminal: "php artisan serve" (sem as aspas). Ele irar gerar 
uma url onde o servidor estará funcionando, exemplo: http://127.0.0.1:8000.

+ Ao digitar isso na barra de endereço você terá acesso a "aplicação" e simular os uso sem a necessidade
de usar o postman ou Insomnia de forma mais simples e amigavel.
## Tecnologias usadas

+ Composer 2.1.5
+ Laravel 8.x
+ MySql 10.4.20

## Utilizando a API

O foco dessa aplicação é criação de uma API REST, onde seja possível a comunicação, via protocolo HTTP com
recursos externos como Angular ou React, por exemplo.

Recursos disponiveis para acesso via API:

+ Clientes
+ Procedimentos
+ Categorias
+ Especialistas
+ Agenda (resumo do procedimento)

## Métodos

Requisições para a API devem seguir os seguintes padrões:

| Método | Descrição |
|---|---|
| `GET` | Retorna informações de um ou mais registros. |
| `POST` | Utilizado para criar um novo registro. |
| `PUT` | Atualiza dados de um registro ou altera sua situação. |
| `DELETE` | Remove um registro do sistema. |


No diretório "app/Http/Controllers" , todas as classes terminadas com "Controller" são utilizadas para requisições 
HTTP e já retornadas no formato JSON.

No arquivo de rotas "routes/api.php", estão todas as rotas necessárias para necessidade e funcionalidade via HTTP.






 