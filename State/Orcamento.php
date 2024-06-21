<?php

declare(strict_types=1);

namespace App\State;

use App\State\EstadosOrcamento\EmAprovacao;
use App\State\EstadosOrcamento\Estado;

class Orcamento
{
    public float $valor;
    public Estado $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra(): void
    {
        $this->valor -= $this->estadoAtual->calcularDescontoExtra($this);
    }

    public function aprovar(): void
    {
        $this->estadoAtual->aprovar($this);
    }

    public function reprovar(): void
    {
        $this->estadoAtual->reprovar($this);
    }

    public function finalizar(): void
    {
        $this->estadoAtual->finalizar($this);
    }
    /* public function calcularDescontoExtra(): float
    {
        return $this->estadoAtual->calcularDescontoExtra($this);


        if ($this->estadoAtual instanceof EmAprovacao) {
            return $this->valor * 0.05;
        } elseif ($this->estadoAtual instanceof Aprovado) {
            return $this->valor * 0.02;
        } else {
            throw new \Exception("Orcamento em estado invalido");
        }
    } */
}
