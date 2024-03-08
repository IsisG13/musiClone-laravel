<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MusiCloneInicial</title>

    <style>
        body {
            background-color: aliceblue;
        }

        h3 {
            text-align: center;
        }

        .usuarios {
            text-align: center
        }

        .card-user {
            background-color: #e4e9ee;
            border-radius: 17px;
            width: 50%;
            height: 140px;
            text-align: center;
            margin-left: 25%;
        }

        .card-user p {
            padding: 3%;
        }

        .planos {
            text-align: center;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .card-planos {
            background-color: #e9edf2;
            border-radius: 16px;
            width: 195px;
            height: 510px;
            margin-left: 2%;
        }

        .card-planos p {}

        .seguindo {
            text-align: center;
            display: flex;
            justify-content: flex-start;
            margin-left: 41%;
            flex-direction: column;
            align-items: flex-start;
        }

        .card-seguindo {
            text-align: center;
        }

        .card-seguindo p {}
    </style>
</head>

<body>
    <div>
        <h1> Bem vindos ao MusiClone</h1>

        <h3>Usuários</h3>
        <div class="usuarios">
            @foreach ($resultados1 as $resultado1)
                <div class="card-user">
                    <p>
                        {{ $resultado1->usuario_id }} -
                        {{ $resultado1->nome }} -
                        {{ $resultado1->idade }} anos <br />
                        Possui um plano {{ $resultado1->plano }} -
                        Assinou em: {{ $resultado1->data_assinatura }}
                    </p>
                </div>
            @endforeach
        </div>

        <h3>Planos</h3>
        <div class="planos">
            @foreach ($resultados2 as $resultado2)
                <div class="card-planos">
                    <p>
                        {{ $resultado2->plano_id }} -
                        {{ $resultado2->plano }} - <br />
                        R${{ $resultado2->valor_plano }}
                    </p>
                </div>
            @endforeach
        </div>

        <h3>Usuarios seguem: </h3>
        <div class="seguindo">
            @foreach ($resultados3 as $resultado3)
                <div class="card-seguindo">
                    <p>
                        {{ $resultado3->usuario_id }} -
                        {{ $resultado3->nome }} -
                        {{ $resultado3->nome_artista }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
