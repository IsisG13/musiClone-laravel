<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MusiClone</title>

    <style>
        body {
            background-color: aliceblue;
        }

        h1 {
            text-align: center;
            margin-bottom: 5%;
        }

        h3 {
            margin-left: -1%;
            margin-bottom: -1%;
            font-size: 165%;
        }

        .albuns,
        .musicas {
            text-align: center;
        }

        .card-albuns {
            display: flex;
            flex-wrap: wrap;
        }

        .card-albuns p {
            background-color: #d8e6f2;
            width: 45%;
            margin-inline: auto;
            border: 1px solid #c7c7c7;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .artistas h3 {
            margin-left: 10%;
        }

        .card-artistas {
            margin-left: 2%;
            width: 90%;
        }

        .card-artistas p {
            background-color: #bbd8f2;
            width: 91%;
            margin-left: 3%;
            border: 1px solid #b7b3b3;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 9%;
        }

        .card-musicas {
            width: 91%;
            margin-left: 3%;
        }

        .card-musicas p {
            background-color: #a6ccf8;
            border: 1px solid #939393;
            height: 53px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 11%;
        }
    </style>
</head>

<body>
    <h1>Bem vindos ao MusiClone</h1>
    <div class="artistas">
        <h3>Artistas</h3>
        <div class="card-artistas">
            @foreach ($resultados1 as $resultado1)
                <p> → {{ $resultado1->nome_artista }}
                </p>
            @endforeach
        </div>
    </div>

    <div class="albuns">
        <h3>Albuns</h3>
        <div class="card-albuns">
            @foreach ($resultados2 as $resultado2)
                <p> {{ $resultado2->Album }} -
                    {{ $resultado2->Ano_do_album }}</p>
            @endforeach
        </div>
    </div>

    <div class="musicas">
        <h3>Músicas</h3>
        <div class="card-musicas">
            @foreach ($resultados3 as $resultado3)
                <p> {{ $resultado3->musica_id }} -
                    {{ $resultado3->nome_musica }} -
                    {{ sprintf('%02d:%02d', floor($resultado3->duracao_segundos / 60), $resultado3->duracao_segundos % 60) }}
                </p>
            @endforeach
        </div>
    </div>
</body>

</html>
