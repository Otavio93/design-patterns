<?php
require __DIR__ . '/../vendor/autoload.php';
// namespace App\Strategy;

use \App\Strategy\Orcamento;

$orcamento = new Orcamento(500);

echo '<pre>';
var_dump($orcamento->getValor());