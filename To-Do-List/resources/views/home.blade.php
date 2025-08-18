<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <div>
            <h1>Reminder</h1>
        </div>
        <div>
            <h2>Busca por Titulo</h2>
            <form action="{{url('pesquisa')}}" method="GET">
                <input type="search" name="pesquisar" placeholder="     ">
                <input type="submit" Value="Pesquisar">
            </form>
        </div>
        <div>
            @foreach($tarefas as $tarefa)
                <div>  
                    <h3>Titulo:   {{$tarefa['titulo']}} Vencimento:   {{$tarefa['vencimento']}} Status:   {{$tarefa['status']}}</h3>
                </div>   
                <div>
                    {{$tarefa['descrição']}}
                </div>
                <a href="/editar-tarefa/{{$tarefa->id}}">Editar</a> 
                <form action="/deletar/{{$tarefa->id}}" method="POST">@csrf @method('DELETE')<button>Deletar</button></form> 
            @endforeach
        </div>
        <div>
             <a href="/criar">Adcionar Tarefa</a> 
        </div>
    </div> 
</body>
</html>