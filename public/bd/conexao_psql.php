<?php
$host='localhost';
$db = 'c9';
$username = 'ubuntu';
$password = 'root';

$mysqllink = pg_pconnect("dbname=c9 user=ubuntu password=root port=5432 host=localhost");


if ($mysqllink){

}else {
echo "codigo 20";
die("Erro: ".mysqli_error($mysqllink));
	
}
	

?>