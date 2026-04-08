<?php

$salarios = [1000, 1200, 1400, 1600, 1800, 2000, 2200, 2400];

$soma = 0;
$mediasal = 0;
$maiorsal = $salarios[0];
$menorsal = $salarios[0];
$acima = 0;
$abaixo = 0;

foreach ($salarios as $salario){
    $soma += $salario;
    
    if ($salario >= $maiorsal){
        $maiorsal = $salario;
    }
    
    if ($salario <= $menorsal){
        $menorsal = $salario;
    }

    if ($salario > 2000){ 
        $acima++;
    } else {
        $abaixo++;
    }
}

$mediasal = $soma / count($salarios);

echo "media dos salários: $mediasal\n <br>";
echo "maior salário: $maiorsal\n <br>";
echo "menor salário: $menorsal\n <br>";
echo "maiores que 2000: $acima\n <br>";
echo "menores que 2000: $abaixo\n";

?>