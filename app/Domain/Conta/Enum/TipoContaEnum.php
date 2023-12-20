<?php

declare(strict_types=1);

namespace App\Domain\Enum;

Enum TipoContaEnum {
    const CONTA_CORRENTE = 'Conta Corrente';
    const CONTA_POUPANCA = 'Conta Poupança';
    const CONTA_SALARIO = 'Conta Salário';
    const CONTA_DIGITAL = 'Conta Digital';
}