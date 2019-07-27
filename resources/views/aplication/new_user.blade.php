<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Novo Usuário</h1>
  <form method="post" action="/aplication/cadastrar">
    {!! csrf_field() !!}
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
    <label for="deck">Deck</label>
    <input type="text" name="deck" id="deck">
    <label for="wins">Wins</label>
    <input type="number" name="wins" id="wins">
    <label for="loses">Loses</label>
    <input type="number" name="loses" id="loses">
    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>