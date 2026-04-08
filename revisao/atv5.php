<?php

    $users = file_get_contents("https://jsonplaceholder.typicode.com/posts ");

    $users = json_decode($users, true);

    foreach($users as $user){
        print_r("Título: " . $user['title'] . "<br>");
        print_r("Conteudo: " . $user['body'] . "<br>");
        print_r("Id: " . $user['id'] . "<br>"); 
    }

?>