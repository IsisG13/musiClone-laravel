<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MusiCloneInicial</title>
</head>

<body>
    <div>
        <h1> Bem vindos ao MusiClone</h1>
        <div>
            <h3>Usuários</h3>
            @foreach ($resultados1 as $resultado1)
                <p> {{ $resultado1->usuario_id }} -
                    {{ $resultado1->nome }} -
                    {{ $resultado1->idade }} anos <br />
                    Possui um plano {{ $resultado1->plano }} -
                    Assinou em: {{ $resultado1->data_assinatura }}
                </p>
            @endforeach
        </div>
        <div>
            <h3>Planos</h3>
            @foreach ($resultados2 as $resultado2)
                <p> {{ $resultado2->plano_id }} -
                    {{ $resultado2->plano }} -
                    R${{ $resultado2->valor_plano }}
                </p>
            @endforeach
        </div>
        <div>
            <h3>Usuarios seguem: </h3>
            @foreach ($resultados3 as $resultado3)
                <p> {{ $resultado3->usuario_id }} -
                    {{ $resultado3->nome }} -
                    {{ $resultado3->nome_artista }}
                </p>
            @endforeach
        </div>
    </div>
</body>

</html>
