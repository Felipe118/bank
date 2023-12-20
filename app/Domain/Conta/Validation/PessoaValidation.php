<?php

declare(strict_types=1);

namespace App\Domain\Conta\Validation;

class PessoaValidation extends \DomainException
{
    public function __construct()
    {
        parent::__construct('Usuário inválida');   
    }
}