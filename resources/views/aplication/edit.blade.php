<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1>Editar Usuário</h1>
  <form method="post" action="{{ "/aplication/{$usuario->id}/edit" }}">
    {!! csrf_field() !!}
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{$usuario->name}}">
    <label for="deck">Deck</label>
    <input type="text" name="deck" id="deck" value="{{$usuario->deck}}">
    <label for="wins">Wins</label>
    <input type="number" name="wins" id="wins" value="{{$usuario->wins}}">
    <label for="loses">Loses</label>
    <input type="number" name="loses" id="loses" value="{{$usuario->loses}}">
    <button type="submit">Editar</button>
  </form>
</body>
</html>