<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function criarTarefa(Request $request) {
        $dadosCriar = $request->validate([
            'nome' => 'required',
            'vencimento' => 'required'
        ]);
        return 'test';
    }
}
