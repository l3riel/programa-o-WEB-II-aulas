<?php

$temps = [18, 21, 23, 24, 25, 27, 28, 29, 30, 32];

$mediatemp = 0;
$maiortemp = $temps[0];
$menortemp = $temps[0];
$acima = 0;
$abaixo = 0;

foreach( $temps as $temp){

    if($temp > $maiortemp){ 
        $maiortemp = $temp;
    }

    if($temp < $menortemp){
        $menortemp = $temp;
    }

    if($temp > 30){
        $acima++;
    } else{
        $abaixo++;
    }   
}

$mediatemp = array_sum($temps)/ count($temps);

echo "A média das temperaturas é $mediatemp\n <br>";
echo "A maior temperatura é $maiortemp\n <br>";
echo "A menor temperatura é $menortemp\n <br>";
echo "A quantidade de temperaturas acima de 30 é $acima\n <br>";
echo "A quantidade de temperaturas abaixo de 30 é $abaixo\n <br>";

?>