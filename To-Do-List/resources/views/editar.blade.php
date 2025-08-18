<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="conteudo">
        <div>
            <h1>Editar Tarefa</h1>
        </div>
        <div class="edicao">
            <form action="/editar-tarefa/{{$tarefa->id}}" method="POST">
                @csrf   
                @method('PUT')
                <input name="titulo" type="text" value="{{$tarefa->titulo}}">
                <input name="descrição" type="text" value="{{$tarefa->descrição}}">
                <input name="vencimento" type="date" value="{{$tarefa->vencimento}}">
                <select name="status" type="enum" value="{{$tarefa->status}}">
                    @foreach($status as $statu)
                        <option value= {{$statu}} selected="{{$statu}}">{{$statu}}</option>
                    @endforeach
                </select>
                <button class="botao">Salvar Alterações</button>     
            </form>
        </div>   
    </div>
</body>
</html>