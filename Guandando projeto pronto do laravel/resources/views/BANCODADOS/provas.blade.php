


<?php
$servername = "127.0.0.1:3306";
$database = "c9";
$username = "jose_espinheira";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "
INSERT INTO `provas` (`id_disciplina`,`id_curso`,`ano_semestre`,`matricula_aluno`,`descricao`,`nota`) VALUES ('16','16','2018.1','16','Prova 1','227'),
('97','97','2013.2','97','Prova 10','822'),
('0','0','2010.1','0','Prova 11','97'),
('9','9','2014.2','9','Prova 12','923'),
('4','4','2012.1','4','Prova 13','249'),
('13','13','2016.2','13','Prova 14','590'),
('39','39','2011.2','39','Prova 15','913'),
('2','2','2011.1','2','Prova 16','890'),
('43','43','2013.2','43','Prova 17','522'),
('8','8','2014.1','8','Prova 18','132'),
('11','11','2015.2','11','Prova 19','278'),
('6','6','2013.1','6','Prova 2','271'),
('27','27','2014.2','27','Prova 20','485'),
('1','1','2010.2','1','Prova 3','579'),
('31','31','2016.2','31','Prova 4','28'),
('15','15','2017.2','15','Prova 5','394'),
('5','5','2012.2','5','Prova 6','94'),
('3','3','2011.2','3','Prova 7','724'),
('23','23','2012.2','23','Prova 8','959'),
('51','51','2017.2','51','Prova 9','882'); 

";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>