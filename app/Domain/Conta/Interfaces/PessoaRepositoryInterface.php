<?php

declare(strict_types=1);

namespace App\Domain\Conta\Interfaces;

use App\Domain\Conta\Entity\Pessoa;

interface PessoaRepositoryInterface
{
    public function insert(Pessoa $pessoa) :void;
    // public function update(array $dados) :void;
    //public function abrirConta() :void;
}