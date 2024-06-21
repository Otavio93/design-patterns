<?php

namespace App\State\EstadosOrcamento;

use App\State\Orcamento;

class EmAprovacao extends Estado
{
	public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprovar(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprovar(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Cancelado();
    }
}
