<?php

declare(strict_types=1);

namespace App\Domain\Conta\Repository;

use App\Domain\Conta\Interfaces\PessoaRepositoryInterface;

class PessoaRepository implements PessoaRepositoryInterface
{
    public function __construct(
        protected \PDO $conexao
    ){}

    public function teste()
    {
        $query = "SELECT * FROM Usuario.usuario";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        dd($result);
    }
    
}