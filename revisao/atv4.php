<?php

    $users = file_get_contents("https://jsonplaceholder.typicode.com/users");

    $users = json_decode($users, true);

    foreach($users as $user){ 

        print_r("Nome: " . $user['name'] . "<br>");
        print_r("Email: " . $user['email'] . "<br>");
        print_r("Cidade: " . $user['address']['city'] . "<br><br>");
}

?>