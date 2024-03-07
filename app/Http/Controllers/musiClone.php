<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class musiClone extends Controller
{
    public function exibirResultados()
    {
        $resultados = DB::select
        ("SELECT albuns.album_id, albuns.nome_album, albuns.artista_id,
        artistas.artista_id, artistas.nome_artista
        FROM artistas,
        albuns,
        planos,
        usuarios,
        musicas,
        seguindo_artistas,
        historico_reproducoes;");

        return view('/musiClone')->with('resultados', $resultados);
    }
}
