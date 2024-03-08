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
    <div>
        <h3>Artistas</h3>
        @foreach($resultados1 as $resultado1)
        <p> {{ $resultado1->artista_id }} -
            {{ $resultado1->nome_artista }}</p>
        @endforeach
    </div>
    <div>
        <h3>Albuns</h3>
        @foreach($resultados2 as $resultado2)
        <p> {{ $resultado2->album_id }} -
            {{ $resultado2->Album }} -
            {{ $resultado2->Ano_do_album }}</p>
        @endforeach
    </div>
    <div>
        <h3>Músicas</h3>
        @foreach($resultados3 as $resultado3)
        <p> {{ $resultado3->musica_id }} -
            {{ $resultado3->nome_musica }} -
            {{ sprintf('%02d:%02d', floor($resultado3->duracao_segundos / 60), $resultado3->duracao_segundos % 60) }}</p>
        @endforeach
    </div>
</body>
</html>
