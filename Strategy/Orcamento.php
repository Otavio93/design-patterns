<?php

namespace App\Strategy;

class Orcamento
{
    private float $valor;
    private int $qtyItens;

    public function __construct(float $valor, int $qtyItens)
    {
        $this->valor = $valor;
        $this->qtyItens = $qtyItens;
    }
    
    public function getValor(): float
    {
        return $this->valor;
    }

    public function getQtyItens(): int
    {
        return $this->qtyItens;
    }

    public function setQtyItens(int $qtyItens): void
    {
        $this->qtyItens = $qtyItens;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }
}

