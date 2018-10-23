


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
INSERT INTO `monitorias` (`id_disciplina`, `id_curso`,`ano_semestre`, `matricula_aluno`, `matricula_professor`) VALUES ('1','1','2010.2','1','1');
";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>