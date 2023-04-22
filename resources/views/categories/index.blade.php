<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetegorias:</title>
</head>
<body>
    <h1>Lista de categorias:</h1>
    <a href="/categories/create">Adicionar Categoria</a>

    <ul>
    @foreach ($categories as $categories)
        <li> 
            {{ $categories->id }} - {{ $categories->name }} 
            <a href="/categories/edit/{{ $categories->id }}">editar</a>
            <form action="/categories/{{ $categories->id }}" method="post">
                @csrf
                @method("delete")
                <button type="submit">Deletar</button>
            </form>
        </li> 
    @endforeach
    </ul>
</body>
</html>