<?php

namespace App\Strategy\Contracts;

use App\Strategy\Orcamento;

interface Imposto
{
    public function calcula(Orcamento $orcamento): float;
}