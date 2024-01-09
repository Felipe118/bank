<?php

declare(strict_types=1);

namespace App\Domain\Conta\Entity;

use App\Domain\Enum\TipoContaEnum;

class Conta
{
   
    public function __construct(
        private int $numeroConta,
        private int $agencia,
        private TipoContaEnum $tipoConta,
        private float $saldo = 0.0,
        private string $dataCriacao = new \DateTimeImmutable(),
        private string $cpfPessoa
    ) {}

        
    
}