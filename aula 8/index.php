<?php

// Interfaces (DIP / ISP)

interface CalculadoraDesconto
{
    public function calcular($valor);
}

interface PedidoRepository
{
    public function salvar($valor);
}

interface Notificador
{
    public function enviar($mensagem);
}

// Implementações de desconto (OCP)

class DescontoVip implements CalculadoraDesconto
{
    public function calcular($valor)
    {
        return $valor * 0.2;
    }
}

class DescontoRegular implements CalculadoraDesconto
{
    public function calcular($valor)
    {
        return $valor * 0.1;
    }
}

// Infraestrutura

class MySQLRepository implements PedidoRepository
{
    public function salvar($valor)
    {
        echo "Salvando pedido no MySQL com valor {$valor} <br>";
    }
}

class EmailNotificador implements Notificador
{
    public function enviar($mensagem)
    {
        echo "Enviando email: {$mensagem} <br>";
    }
}

// Classe principal (SRP)

class Pedido
{
    private $valor;
    private $calculadoraDesconto;
    private $repository;
    private $notificador;

    public function __construct(
        $valor,
        CalculadoraDesconto $calculadoraDesconto,
        PedidoRepository $repository,
        Notificador $notificador
    ) {
        $this->valor = $valor;
        $this->calculadoraDesconto = $calculadoraDesconto;
        $this->repository = $repository;
        $this->notificador = $notificador;
    }

    public function processar()
    {
        $desconto = $this->calculadoraDesconto->calcular($this->valor);
        $valorFinal = $this->valor - $desconto;

        $this->repository->salvar($valorFinal);
        $this->notificador->enviar("Pedido no valor de {$valorFinal} processado");
    }
}

// Uso (injeção de dependência)

// Escolha da estratégia
$calculadora = new DescontoVip(); // pode trocar sem mexer na classe Pedido

$repository = new MySQLRepository();
$notificador = new EmailNotificador();

$pedido = new Pedido(1000, $calculadora, $repository, $notificador);
$pedido->processar();