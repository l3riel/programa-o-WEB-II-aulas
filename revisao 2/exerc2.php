<?php

$pessoas = [
    ['nome' => 'jao', 'profissao' => 'pedreiro', 'salario' => 1600],
    ['nome' => 'cadu', 'profissao' => 'destrava', 'salario' => 1800],
    ['nome' => 'pepe', 'profissao' => 'aviao', 'salario' => 2000],
    ['nome' => 'lele', 'profissao' => 'caminhoneiro', 'salario' => 2200],
    ['nome' => 'dieguin', 'profissao' => 'promessa', 'salario' => 2400],
];

$media = 0;
$maiorsal = $pessoas[0];
$menorsal = $pessoas[0];
$acima = 0;
$abaixo = 0;

foreach ($pessoas as $pessoa){ 
    
    $media += $pessoa['salario'];

    if ($pessoa['salario'] >= 2000){
        $acima++; 
    } else {
        $abaixo++;
    }

    if($maiorsal['salario'] > $pessoa['salario'] ){
        $maiorsal = $pessoa;
    }

    if($menorsal['salario'] < $pessoa['salario']){ 
        $menorsal = $pessoa;
    }


}

$media = $media / count($pessoas);

echo "Media: $media <br>";
echo "Salarios acima de 2000: $acima <br>";
echo "Salarios abaixo de 2000: $abaixo <br>"; 
echo "Maior Salario: " . $maiorsal['nome'] . " - " . $maiorsal['profissao'] . " - " . $maiorsal['salario'] . "<br>";
echo "Menor Salario: " . $menorsal['nome'] . " - " . $menorsal['profissao'] . " - " . $menorsal['salario'];