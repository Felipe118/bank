<?php

declare(strict_types=1);

namespace App\Domain\Conta\Repository;

use App\Domain\Conta\Entity\Pessoa;
use App\Domain\Conta\Interfaces\PessoaRepositoryInterface;

class PessoaRepository implements PessoaRepositoryInterface
{
    public function __construct(
        protected \PDO $conexao
    ){}

    public function abrirConta(Pessoa $pessoa)
    {
        $query = "INSERT INTO usuario.usuario(nome, cpf, email,senha) VALUES (:nome, :cpf, :email, :senha)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', 'teste');
        $stmt->bindValue(':cpf', '12345678910');
        $stmt->bindValue(':email', '');
        $stmt->bindValue(':senha', '');
        $stmt->execute();
    }
    
}