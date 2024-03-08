<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class musiCloneInicial extends Controller
{
    public function exibirResultados()
    {
        // Usuarios
        $resultados1 = DB::select
        ("SELECT usuarios.usuario_id,
        usuarios.nome,
        usuarios.idade,
        usuarios.plano_id,
        planos.plano,
        usuarios.data_assinatura
        FROM usuarios
        INNER JOIN planos ON usuarios.plano_id = planos.plano_id
        ORDER BY usuarios.usuario_id;");

        // Planos
        $resultados2 = DB::select
        ("SELECT planos.plano_id,
        planos.plano,
        planos.valor_plano
        FROM planos;");

        // Sequindo artistas
        $resultados3 = DB::select
        ("SELECT sa.usuario_id,
        usuarios.nome,
        sa.artista_id,
        artistas.nome_artista
        FROM seguindo_artistas sa
        INNER JOIN usuarios ON sa.usuario_id = usuarios.usuario_id
        INNER JOIN artistas ON sa.artista_id = artistas.artista_id
        ORDER BY usuarios.usuario_id;");

        return view('/musiCloneInicial')
        ->with('resultados1', $resultados1)
        ->with('resultados2', $resultados2)
        ->with('resultados3', $resultados3);
    }
}
