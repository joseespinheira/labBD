<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_database = "academiasis";
 
$mysqllink = mysqli_connect($db_host, $db_user, $db_password,$db_database);


if ($mysqllink){
	
}else {
echo "codigo 20";
die("Erro: ".mysqli_error($mysqllink));
	
}
	

?>