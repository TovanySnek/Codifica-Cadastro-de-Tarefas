<?php

use App\Models\Tarefa;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tarefas = Tarefa::orderBy('vencimento', 'ASC')->get();
    return view('home', ['tarefas' => $tarefas]);
});

Route::post('/criar-tarefa', [TarefaController::class, 'criarTarefa']); 

Route::get('/editar-tarefa/{tarefa}', [TarefaController::class, 'telaEditar']);
Route::put('/editar-tarefa/{tarefa}', [TarefaController::class, 'atualizarTarefa']);

Route::delete('/deletar/{tarefa}', [TarefaController::class, 'deletarTarefa']);

Route::get('/criar', [TarefaController::class, 'telaCriar']);

Route::get('/pesquisa', [TarefaController::class, 'pesquisarTarefa']);

