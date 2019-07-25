<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <a href="/aplication/new_user">Novo Usuário</a>
    <table>
        <thead>
            <th>ID -- </th>
            <th>JOGADOR -- </th>
            <th>DECK -- </th>
            <th>WINS -- </th>
            <th>LOSES -- </th>
            <th>TOT</th>
            <th>AÇÃO</th>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->deck}}</td>
                    <td>{{$usuario->wins}}</td>
                    <td>{{$usuario->loses}}</td>
                    <td></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>