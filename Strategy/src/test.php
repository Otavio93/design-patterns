<?php
require __DIR__ . '/../vendor/autoload.php';
// namespace App\Strategy;

use App\Strategy\CalculadoraDeImpostos;
use App\Strategy\Icms;
use App\Strategy\Iss;
use \App\Strategy\Orcamento;

$orcamento = new Orcamento(50);
$calculadora = new CalculadoraDeImpostos();


echo '<pre>';
var_dump($calculadora->calcula($orcamento, new Icms()));
var_dump($calculadora->calcula($orcamento, new Iss()));