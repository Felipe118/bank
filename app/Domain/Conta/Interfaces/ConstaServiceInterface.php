<?php

declare(strict_types=1);

namespace App\Domain\Conta\Interfaces;

interface ContaServiceInterface
{
    public function insert(array $dados) :void;
    public function update(array $dados) :void;
    //public function abrirConta() :void;
}