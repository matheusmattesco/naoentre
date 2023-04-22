<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria | Editar</title>
</head>
<body>
    <h1>Editar Categoria: {{ $Categories->name }}</h1>

    <form action="/Categories/{{$Categories->id}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name" value="{{ $Categories->name }}">
        </div>
        <div>
            <label for="name">UUid: </label>
            <input type="text" name="uuid" id="uuid" value="{{ $Categories->uuid }}">
        </div>
        <div>
            <label for="name">Descrição: </label>
            <input type="text" name="description" id="description" value="{{ $Categories->description }}">
        </div>      
        <button type="submit">Salvar</button>
    </form>

    <a href="/users">Voltar</a>
</body>
</html>