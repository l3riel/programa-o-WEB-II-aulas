<?php

$idades = [12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34];

$soma = 0;
$mediaidades = 0;
$maioridade = $idades[0];
$menoridade = $idades[0];
$maiores = 0;
$menores = 0;

foreach ($idades as $idade){ 
    $soma += $idade;

    if ($idade > $maioridade){
        $maioridade = $idade;
    }

    if ($idade < $menoridade){ 
        $menoridade = $idade;
    }

    if ($idade >= 18){
        $maiores++;
    } else {
        $menores++; 
    }
}
$media = $soma / count($idades);

echo "Média das idades: $media\n <br>";
echo "Maior idade: $maioridade\n <br>";
echo "Menor idade: $menoridade\n <br>";
echo "Mairores que 18: $maiores\n <br>";
echo "Menores que 18: $menores\n";


?>