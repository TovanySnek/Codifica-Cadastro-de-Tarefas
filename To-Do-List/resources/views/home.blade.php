<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder</title>
</head>
<header>

</header>
<body>
    <div>
        <h1>Reminder</h1>

        <div>
            <h2>Busca por Titulo</h2>

        </div>
            @foreach($tarefas as $tarefa)

                <h3>{{$tarefa['titulo']}}Estudar PHP</h3>   
                <h3>{{$tarefa['vencimento']}}25/07/2032</h3>
                <h3>{{$tarefa['status']}}Pendente</h3>
                <h3>{{$tarefa['descricao']}}Descrição</h3>
                <form action="/concluir-post/{{$post->id}}" method="POST">@csrf <button>Feito</button> <button href="/editar-tarefa/{{$tarefa->id}}">Editar</button> <form action="/delete-post/{{$post->id}}" method="POST">@csrf @method('DELETE')<button>Deletar</button></form>

            @endforeach
        <div>

             <a href="/criar">Adcionar Tarefa</a> 
 
        </div>
    </div>
    
</body>
</html>