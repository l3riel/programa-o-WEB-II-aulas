<?php 
    function calculaprodutos(){ 
        $produtos = [
            [  
                'nome' => 'arroz',
                'preco' => 15,
                'quantidade' => 10
            ],
            [ 
                'nome' => 'feijao',
                'preco' => 10,
                'quantidade' => 25
            ],
            [ 
                'nome' => 'farofa',
                'preco' =>20,
                'quantidade' => 30
            ],
        ];

        $totalproduto = 0;
        $totalcompra = 0;

        echo "Detalhes da compra: <br><br>";

        foreach ($produtos as $produto){ 
            $totalproduto += $produto['preco'];
            $totalcompra += $produto['preco'] * $produto['quantidade'];
        }

        echo $totalproduto . "<br>";
        echo $totalcompra;
    }

calculaprodutos();
?>