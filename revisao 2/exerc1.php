<?php

$pessoas = [
    ['nome' => 'jao', 'idade' => 12],['nome' => 'bia', 'idade' => 14],['nome' => 'isa', 'idade' => 16],
    ['nome' => 'bel', 'idade' => 18],['nome' => 'teo', 'idade' => 20],['nome' => 'ze', 'idade' => 22],
];

$media = 0;
$menores18 = 0;
$maiores18 = 0;

$maioridade = $pessoas[0];
$menoridade = $pessoas[0];


foreach ($pessoas as $pessoa){

    $media += $pessoa['idade'];

    if ($pessoa['idade'] >= 18){
        $maiores18++;
    } else { 
        $menores18++;
    }

    if ($pessoa['idade'] > $maioridade['idade']){
        $maioridade = $pessoa;
    }

    if ($pessoa['idade'] < $menoridade['idade']){
        $menoridade = $pessoa; 
    }

}

$media = ($media) / count($pessoas);

echo "Média: $media <br>";
echo "Maiores de idade: $maiores18 <br>";
echo "Menores: $menores18 <br>";
echo "Maior idade: " . $maioridade['nome'] . " - " . $maioridade['idade'] . "<br>";
echo "Menor idade: " . $menoridade['nome'] . " - " . $menoridade['idade'];


