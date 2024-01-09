<?php

declare(strict_types=1);

namespace App\Domain\Conta\Interfaces;

use App\Domain\Conta\Entity\Pessoa;

interface PessoaRepositoryInterface
{
    public function abrirConta(Pessoa $pessoa) ;
}