<?php

$itens = [
    ['nome' => 'arroz', 'preco' => 15, 'quantidade' => 25 ],
    ['nome' => 'feijao', 'preco' => 10, 'quantidade' => 12],
    ['nome' => 'linguica', 'preco' => 18, 'quantidade' => 13],
];

$totalcom = 0; 
$caro = $itens[0]; 
$barato = $itens[0];

foreach($itens as $item){ 

    $totalitem = $item['preco'] * $item['quantidade'];
    echo "este é o total de " . $item['nome'] . " e " . $totalitem . "<br>";

    $totalcom += $totalitem;

    if($item['preco'] < $caro){
        $caro = $item;
    }

    if($item['preco'] > $barato){
        $barato = $item;
    }

}

echo "este e o total da compra: $totalcom <br>";
echo "este é o item mais barato: " .  $barato['nome'] . " | " . $barato['preco'] . "<br>"; 
echo "este é o item mais caro: " .  $caro['nome'] . " | " . $caro['preco'] . "<br>";  

