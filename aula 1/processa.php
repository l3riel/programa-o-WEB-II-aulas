<?php

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];

$image = $_FILES['image'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados do Produto</title>
</head>
<body>

<h2>Produto Cadastrado</h2>

<ul>
    <li><strong>ID:</strong> <?= $id ?></li>
    <li><strong>Título:</strong> <?= $title ?></li>
    <li><strong>Preço:</strong> R$ <?= number_format($price, 2, ',', '.') ?></li>
    <li><strong>Descrição:</strong> <?= $description ?></li>
    <li><strong>Categoria:</strong> <?= $category ?></li>
</ul>

<h3>Imagem enviada</h3>
<p>Nome do arquivo: <?= $image['name'] ?></p>
<p>Tamanho: <?= $image['size'] ?> bytes</p>
<p>Tipo: <?= $image['type'] ?></p>

</body>
</html>

