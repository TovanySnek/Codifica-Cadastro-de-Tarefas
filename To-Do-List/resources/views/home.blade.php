<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="conteudo">
        <div>
            <h1>Reminder</h1>
        </div>
        <div class="busca">
            <h2>Busca por Titulo</h2>
            <form action="{{url('pesquisa')}}" method="GET">
                <input type="search" name="pesquisar" placeholder="     ">
                <input type="submit" Value="Pesquisar">
            </form>
        </div>
        <div class="tarefas">
            @foreach($tarefas as $tarefa)
                <div class="tarefas_titulo">  
                    <h3>Titulo:   {{$tarefa['titulo']}}</h3> <h3>Vencimento:   {{$tarefa['vencimento']}}</h3> <h3>Status:   {{$tarefa['status']}}</h3>
                </div>   
                <div class="tarefas_descricao">
                    {{$tarefa['descrição']}}
                </div>
                <div class="botao_conteudo">
                    <a href="/editar-tarefa/{{$tarefa->id}}" class="botao">Editar</a> 
                    <form action="/deletar/{{$tarefa->id}}" method="POST">@csrf @method('DELETE')<button class="deletar">Deletar</button></form>
                </div> 
            @endforeach
        </div>
        <div class="adcionar">
            <a href="/criar">Adcionar Tarefa</a> 
        </div>
    </div> 
</body>
</html>