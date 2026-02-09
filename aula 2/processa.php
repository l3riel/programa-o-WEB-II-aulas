<?php

$arquivo = "data.json";

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$texto = file_get_contents($arquivo);
$data = json_decode($texto, true);
$data = $data ?: [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"];
    $username = $_POST["username"];
    $emailUser = $_POST["email"];
    $passwordUser = $_POST["password"];

    $newUser = [
        "id" => $id,
        "username" => $username,
        "email" => $emailUser,
        "password" => $passwordUser
    ];

    $data[] = $newUser;

    file_put_contents($arquivo, json_encode($data, JSON_PRETTY_PRINT));

    echo "<h2>Usuário cadastrado com sucesso</h2>";
    echo "ID: " . $newUser["id"] . "<br>";
    echo "Username: " . $newUser["username"] . "<br>";
    echo "Email: " . $newUser["email"] . "<br>";
    echo "Password: " . $newUser["password"];
}
?>
