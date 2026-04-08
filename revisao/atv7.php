<?php 
        $celulares = [
            [  
                'modelo' => 'iphone 11',
                'preco' => 2000,
                'quantidade' => 6
            ],
            [ 
                'modelo' => 'iphone 13',
                'preco' => 3200,
                'quantidade' => 8
            ],
            [ 
                'modelo' => 'iphone 16',
                'preco' =>4500,
                'quantidade' => 5
            ],
        ];

        $total = 0;
        foreach ($celulares as $celular){ 
            $total += $celular['quantidade'] * $celular['preco'];
            echo $celular['modelo'] . "\n";
        }

        print_r($total);
?>