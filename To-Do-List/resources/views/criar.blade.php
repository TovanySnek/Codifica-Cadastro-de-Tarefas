<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <div>
            <h1>Cadastrar nova Tarefa</h1>
        </div>
        <div>
            <form action="/criar-tarefa" method="POST">
                @csrf
                <input name="titulo" type="text" placeholder="Nome">
                <input name="descrição" type="text" placeholder="Descrição">
                <input name="vencimento" type="date" placeholder="Vencimento">
                <button type="submit">Criar</button> 
            </form>
        </div>
    </div>
</body>
</html>