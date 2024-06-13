<?php
require __DIR__ . '/vendor/autoload.php';

use App\ChainOfResponsibility\CalculadoraDesconto;
use App\Strategy\CalculadoraDeImpostos;
use App\Strategy\Icms;
use App\Strategy\Iss;
use \App\Strategy\Orcamento;

$orcamento = new Orcamento(50, 5);
$calculadoraImposto = new CalculadoraDeImpostos();

echo "# Strategy: Calculando impostos\n";
echo "ICMS: " . $calculadoraImposto->calcula($orcamento, new Icms()) . "\n";
echo "ISS: " . $calculadoraImposto->calcula($orcamento, new Iss()) . "\n";
echo PHP_EOL;

echo "# Chain of Responsibility: \n";
$orcamento->setValor(100);
$calculadoraDesconto = new CalculadoraDesconto();
if ($calculadoraDesconto->calcula($orcamento) !== 10.00) {
    throw new \Exception("Erro ao calcular desconto de 5 itens");
}
echo "Desconto 10%: " . $calculadoraDesconto->calcula($orcamento) . "\n";
$orcamento->setQtyItens(10);
if ($calculadoraDesconto->calcula($orcamento) !== 20.00) {
    throw new \Exception("Erro ao calcular desconto de 10 itens");
}
echo "Desconto 20%: " . $calculadoraDesconto->calcula($orcamento) . "\n";

echo "# Template Method: TODO\n";

echo PHP_EOL;

