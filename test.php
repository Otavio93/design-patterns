<?php
require __DIR__ . '/vendor/autoload.php';

use App\ChainOfResponsibility\CalculadoraDesconto;
use App\Strategy\CalculadoraDeImpostos;
use App\Strategy\Icms;
use App\Strategy\Iss;
use \App\Strategy\Orcamento;
use App\TemplateMethod\{Iva, Icms2};

$orcamento = new Orcamento(50, 5);
$calculadoraImposto = new CalculadoraDeImpostos();

echo "# Strategy: Calculando impostos\n";
echo "ICMS: " . $calculadoraImposto->calcula($orcamento, new Icms()) . "\n";
echo "ISS: " . $calculadoraImposto->calcula($orcamento, new Iss()) . "\n";
echo PHP_EOL . "-------------------------" . PHP_EOL;

echo "# Chain of Responsibility: \n";
$orcamento->setValor(100);
$calculadoraDesconto = new CalculadoraDesconto();
if ($calculadoraDesconto->calcula($orcamento) !== 10.00) {
    throw new \Exception("[Chain of Responsibility] Erro ao calcular desconto de 5 itens");
}
echo "Desconto 10%: " . $calculadoraDesconto->calcula($orcamento) . "\n";
$orcamento->setQtyItens(10);
if ($calculadoraDesconto->calcula($orcamento) !== 20.00) {
    throw new \Exception("[Chain of Responsibility] Erro ao calcular desconto de 10 itens");
}
echo "Desconto 20%: " . $calculadoraDesconto->calcula($orcamento) . "\n";

echo PHP_EOL . "-------------------------" . PHP_EOL;

echo "# Template Method: \n";
$iva = new Iva();
$icms = new Icms2();
$orcamento->setValor(450);
if ($iva->calcula($orcamento) === 45.00){
    echo "Iva: " . $iva->calcula($orcamento) . "\n";
} else {
    throw new \Exception("[Template Method] Erro ao calcular Iva");
}
$orcamento->setValor(550);
if ($icms->calcula($orcamento) === 82.50){
    echo "Icms: " . $icms->calcula($orcamento) . "\n";
} else {
    throw new \Exception("[Template Method] Erro ao calcular Icms");
}
echo PHP_EOL . "-------------------------" . PHP_EOL;


echo "# State: \n";
$orcamento = new App\State\Orcamento();
if (!$orcamento->estadoAtual instanceof App\State\EstadosOrcamento\EmAprovacao) {
    throw new \Exception("[State] O estado inicial do orçamento deveria ser EmAprovacao");
}
$orcamento->aprovar();
if (!$orcamento->estadoAtual instanceof App\State\EstadosOrcamento\Aprovado) {
    throw new \Exception("[State] O estado do orçamento deveria ser Aprovado");
}
$orcamento->valor = 500;
$orcamento->aplicaDescontoExtra();
echo "Orcamento com desconto: ". $orcamento->valor;
if ((int)$orcamento->valor !== 490) {
    throw new \Exception("[State] O desconto deveria ser de 10%");
}
$orcamento->finalizar();

echo PHP_EOL . "-------------------------" . PHP_EOL;

