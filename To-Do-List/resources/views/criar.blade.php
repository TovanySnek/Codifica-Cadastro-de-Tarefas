<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar</title>
</head>
<header>
    <div>
        <a>Cadastrar nova Tarefa</a>
    </div>
</header>
<body>
    <div>
        <form action="/criar" method="POST">
            @csrf
            <input name="nome" type="text" placeholder="Nome">
            <input name="descricao" type="text" placeholder="Descrição">
            <input name="vencimento" type="date" placeholder="Vencimento">
            <button>Criar</button>
        </form>
    </div>
</body>
</html>