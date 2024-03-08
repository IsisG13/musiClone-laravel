<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class musiClone extends Controller
{
    public function exibirResultados()
    {
        $resultados1 = DB::select
        // Artistas
        ("SELECT artistas.artista_id, artistas.nome_artista
        FROM artistas;");

        // Albuns
        $resultados2 = DB::select
        ("SELECT albuns.album_id,
        albuns.ano_lancamento AS Ano_do_album,
        albuns.nome_album AS Album,
        artistas.nome_artista AS Artista
        FROM albuns
        INNER JOIN artistas ON albuns.artista_id = artistas.artista_id;");

        // Musicas
        $resultados3 = DB::select
        ("SELECT musicas.musica_id,
        musicas.nome_musica,
        musicas.duracao_segundos,
        musicas.album_id,
        albuns.nome_album
        FROM musicas
        INNER JOIN albuns ON musicas.album_id = albuns.album_id;");

        return view('/musiClone')
        ->with('resultados1', $resultados1)
        ->with('resultados2', $resultados2)
        ->with('resultados3', $resultados3);
    }
}
