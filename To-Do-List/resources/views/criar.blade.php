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
        <form action="" method="POST">
            @csrf
            <input type="text" placeholder="Nome">
            <input type="text" placeholder="Descrição">
            <input type="date" placeholder="Vencimento">
            <button>Criar</button>
        </form>
    </div>
</body>
</html>