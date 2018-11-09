<?php


$nome = filter_input(INPUT_GET, "nome");
$cpf = filter_input(INPUT_GET, "cpf");
$endereco = filter_input(INPUT_GET, "endereco");
$dt_cadastro = filter_input(INPUT_GET, "dt_cadastro");
$sl_devedor = filter_input(INPUT_GET, "sl_devedor");
$situacao = filter_input(INPUT_GET, "situacao");

include("Cliente-Class.php");

$cliente = new Cliente();
$cliente->nome = $nome;
$cliente->CPF = $cpf;
$cliente->endereco = $endereco;
$cliente->dt_cadastro = $dt_cadastro;
$cliente->sl_devedor = $sl_devedor;
$cliente->situacao = $situacao;
$cliente->gravacliente();


?>