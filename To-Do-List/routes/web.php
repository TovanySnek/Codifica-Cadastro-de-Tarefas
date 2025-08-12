<?php

use App\Models\Tarefa;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tarefas = Tarefa::all();
    return view('home', ['tarefas' => $tarefas]);
});

Route::post('/criar-tarefa', [TarefaController::class, 'criarTarefa']); 

Route::post('/editar', [TarefaController::class, '']);

Route::get('/editar-tarefa/{tarefa}', [TarefaController::class, 'telaEditar']);

Route::get('/criar', [TarefaController::class, 'telaCriar']);

