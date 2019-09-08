<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/app.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Usuários</h1>
        <a href="/aplication/new_user">Novo Usuário</a>
        <table class="table table-striped">
            <thead>
                <th>ID||</th>
                <th>JOGADOR||</th>
                <th>DECK||</th>
                <th>WINS||</th>
                <th>LOSES||</th>
                <th>TOTAL||</th>
                <th>AÇÃO||</th>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->deck}}</td>
                        <td>{{$usuario->wins}}</td>
                        <td>{{$usuario->loses}}</td>
                        <td>{{$usuario->wins + $usuario->loses}}</td>
                        <td>
                            <a href="{{"/aplication/{$usuario->id}/form_editar"}}">Editar</a>
                            <a href="{{"/aplication/{$usuario->id}/excluir"}}" onclick="event.preventDefault();if(confirm('Deseja excluir este registro?')){window.location.href='{{"/aplication/{$usuario->id}/excluir"}}'}">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>