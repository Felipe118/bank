<?php

declare(strict_types=1);

namespace App\Domain\Conta\Entity;

class Pessoa
{
   
    public function __construct(
        private string $cpf,
        private string $nome,
        private string $email,
        private string $senha,
        private string $dataNascimento,
        private string $dataCriacao = new \DateTimeImmutable(),
    ) {}

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    
    
}