
<?php
require "../conexao.php"; 

$id = filter_input(INPUT_GET, "id");

include("Cliente-Class.php");

$cliente = new Cliente();
$cliente->removecliente($id,$mysqllink);

?>