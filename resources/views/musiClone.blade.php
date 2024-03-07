<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MusiClone</title>
</head>
<body>
    <h1>Bem vindos ao MusiClone</h1>
    <p>
        @foreach($resultados as $resultado)
        <p> {{ $resultado->nome_album }}</p>
        @endforeach
    </p>
</body>
</html>