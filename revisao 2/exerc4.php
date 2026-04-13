<?php

$processadores = [
    ['modelo' => 'ryzen3', 'preco' => 400, 'quantidade' => 3],
    ['modelo' => 'ryzen5', 'preco' => 600, 'quantidade' => 7],
    ['modelo' => 'ryzen7', 'preco' => 800, 'quantidade' => 5],

];

$totalg = 0;
$caro = $processadores[0];
$barato = $processadores[0];


foreach($processadores as $p){ 

    $totalm = $p['preco'] * $p['quantidade'];
    echo "este e o valor total de " . $p['modelo'] . " -> " . $totalm . "<br>";

    $totalg += $totalm;

    if($p['preco'] < $caro){
        $caro = $p;
    }

    if($p['preco'] > $barato){
        $barato = $p;
    }
}

echo "este e o total geral do estoque: $totalg <br>";
echo "este e o processador mais caro: "  . $caro['modelo'] . " - " . $caro['preco'] ."<br>";
echo "este e o processador mais barato: " . $barato['modelo'] . " - " . $barato['preco'];