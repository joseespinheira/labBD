<?php 
   
	class Cliente {
		public $created_at;
		public $updated_at;
		public $deleted_at;
		public $matricula_aluno;
		public $id_curso;
		public $matricula_pessoa;
		
		public function gravacliente (){
			/*$link = mysqli_connect("localhost","root","","locadora");*/
			if ($link){
				$query = mysqli_query($link,"insert into clientes values(null,'$this->nome','$this->CPF','$this->endereco','$this->dt_cadastro','$this->sl_devedor','$this->situacao');");
				if ($query){
					header("Location: index.php");
				} else {
					die("Erro: ".mysqli_error($link));
				}
			} else {
				die("Erro: ".mysqli_error($link));
			}
		}
		
		public function removecliente ($p_id,$link){
			/*$link = mysqli_connect("localhost","root","root","academiasis");*/
			
			echo "svsdvz <br>";
			
			if ($link){
				$query = mysqli_query($link,"delete from alunos where matricula_aluno='$p_id';");
				if ($query){
					header("Location: ../../aluno/");
				}
				else {
					die("Erro: ".mysqli_error($link));
				}
			}
			else {
				echo "df;";
				die("Erro: ".mysqli_error($link));
			}
		}
	}
?>