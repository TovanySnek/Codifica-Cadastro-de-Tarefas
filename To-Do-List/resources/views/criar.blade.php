<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar</title>
</head>
<header>
    <div>
        <h1>Cadastrar nova Tarefa</h1>
    </div>
</header>
<body>
    <div>
        <form action="/criar-tarefa" method="POST">
            @csrf
            <input name="titulo" type="text" placeholder="Nome">
            <input name="descrição" type="text" placeholder="Descrição">
            <input name="vencimento" type="date" placeholder="Vencimento">
            <button type="submit">Criar</button> 
        </form>
    </div>
</body>
</html>