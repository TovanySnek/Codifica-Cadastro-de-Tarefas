<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Tarefa</h1>
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
        <button>Salvar Alterações</button>     
    </form>
</body>
</html>