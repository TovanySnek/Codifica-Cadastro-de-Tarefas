<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{   
    public function telaCriar() 
    { 

    return view('criar'); 
    }
    
    public function telaEditar(Tarefa $tarefa) 
    { 

    return view('editar', ['tarefa' => $tarefa]); 
    } 
    
    public function criarTarefa(Request $request) { 
        $dadosCriar = $request->validate([
            'titulo' => 'required',
            'descrição' => 'required',
            'vencimento' => 'required'
        ]);

        Tarefa::create($dadosCriar);
        return redirect('/');
    }

    public function listarTarefa(){

    
    }

    public function buscarTarefa(){

    
    }

    public function atualizarTarefa(){

    
    }

    public function deletarTarefa(){

    
    }

    public function concluirTarefa(){

        return redirect('/');
    }
}
