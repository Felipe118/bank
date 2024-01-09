<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Domain\Conta\Repository\PessoaRepository;
use App\Infrastructure\Database\DatabaseConnection;

$database = new DatabaseConnection();
$conn = $database::connect();
