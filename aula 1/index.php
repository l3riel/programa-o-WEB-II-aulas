<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Produtos</title>
</head>
<body>
    <h2>Cadastro de Produto</h2>

<form action="processa.php" method="post" enctype="multipart/form-data">

    <label>ID:</label><br>
    <input type="number" name="id" required><br><br>

    <label>Título:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="price" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Categoria:</label><br>
    <input type="text" name="category" required><br><br>

    <label>Imagem:</label><br>
    <input type="file" name="image" required><br><br>

    <button type="submit">Enviar</button>
</body>
</html>