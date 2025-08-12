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

                <h3>{{$tarefa['titulo']}}</h3>   
                <h3>{{$tarefa['vencimento']}}</h3>
                <h3>{{$tarefa['status']}}</h3>
                <h3>{{$tarefa['descrição']}}</h3>
                <form action="/concluir-tarefa/{{$tarefa->id}}" method="POST">@csrf <button>Feito</button></form> 
                <button href="/editar-tarefa/{{$tarefa->id}}">Editar</button> 
                <form action="/delete-post/{{$tarefa->id}}" method="POST">@csrf @method('DELETE')<button>Deletar</button></form>

            @endforeach
        <div>

             <a href="/criar">Adcionar Tarefa</a> 
 
        </div>
    </div>
    
</body>
</html>