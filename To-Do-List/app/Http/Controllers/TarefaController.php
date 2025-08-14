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
    $status = ['Pendente','Concluido'];
    return view('editar', compact('status') , ['tarefa' => $tarefa]); 
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

    public function atualizarTarefa(Tarefa $tarefa, Request $request){

        $dadosAtualizar = $request->validate([
            'titulo' => 'required',
            'descrição' => 'required',
            'vencimento' => 'required',
            'status' => 'required'
        ]);

        $tarefa->update($dadosAtualizar);
        return redirect('/');
    }

    public function deletarTarefa(Tarefa $tarefa){

        $tarefa->delete();
        return redirect('/');

    }

    public function pesquisarTarefa(Request $request){

        $pesquisa = $request->pesquisar;

        $tarefas = Tarefa::where('titulo','LIKE','%'.$pesquisa.'%')->get();
    
        return view('home',compact('tarefas'));

    }

}
