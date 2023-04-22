<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags:</title>
</head>
<body>
    <h1>Lista de Tags:</h1>
    <a href="/tag/create">Adicionar Tags</a>

    <ul>
    @foreach ($Tag as $Tag)
        <li> 
            {{ $Tag->id }} - {{ $Tag->name }} 
            <a href="/Tag/edit/{{ $Tag->id }}">editar</a>
            <form action="/Tag/{{ $Tag->id }}" method="post">
                @csrf
                @method("delete")
                <button type="submit">Deletar</button>
            </form>
        </li> 
    @endforeach
    </ul>
</body>
</html>