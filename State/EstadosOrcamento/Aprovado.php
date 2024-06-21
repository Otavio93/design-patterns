<?php

namespace App\State\EstadosOrcamento;

use App\State\Orcamento;

class Aprovado extends Estado
{
	public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finalizar(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
