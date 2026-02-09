<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>

    <h1>Cadastro de Usuário</h1>

    <form action="processa.php" method="POST">
        <p>
            <label for="id">ID do Usuário:</label><br>
            <input type="number" id="id" name="id" placeholder="Ex: 1" required autofocus>
        </p>

        <p>
            <label for="username">Nome do Usuário:</label><br>
            <input type="text" id="username" name="username" placeholder="Digite o nome" required>
        </p>

        <p>
            <label for="email">Email do Usuário:</label><br>
            <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>
        </p>

        <p>
            <label for="password">Senha do Usuário:</label><br>
            <input type="password" id="password" name="password" placeholder="Digite a senha" required>
        </p>

        <p>
            <input type="submit" value="Cadastrar Conta">
        </p>
    </form>

</body>
</html>
