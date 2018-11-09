<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda Telefonica</title>
        
		<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}


label.alinha {

    display: inline-block;
    width: 120px;
}

</style>
	
		
	
       <?php  
       require 'conexao.php';  	   
	   
	   $dados = mysqli_query($mysqllink,"SELECT * FROM clientes ORDER BY nome");
       $linha = mysqli_fetch_assoc($dados);
       $total = mysqli_num_rows($dados);
	
		
		
		
        ?>
        
    </head>
<body>

<div class="container">

<header>
   <h1>Sistema de Clientes Locadora</h1>
</header>
  
<nav>
  <ul>
  <li><a href="index.php">Cadastro Clientes</a></li>
  <li><a href="listaclientes.php">Listagem Clientes</a></li>
     
  </ul>
</nav>

<article>

                  <h1>Listagem Por Cliente</h1>

 <table border='1'>
                <tr>
                    <td> Id </td>
                    <td> Curso </td>
                    <td> CPF </td>
					<td> Endereço </td>
					<td> Data do Cadastro </td>
					<td> Saldo Devedor </td>
					<td> Situacao </td>
					
				
                </tr>
                <?php
                  if($total){do {
                ?>
                
                <tr>
                    <td><?php echo $linha['id']   ?> </td>
                    <td><?php echo $linha['nome']  ?> </td>
                    <td><?php echo $linha['CPF']  ?> </td>
					<td><?php echo $linha['endereco']  ?> </td>
					<td><?php echo $linha['data_cadastro']  ?> </td>
					<td><?php echo $linha['saldo_devedor']  ?> </td>
					<td><?php echo $linha['situacao']  ?> </td>
					<td><a href="<?php echo "excluir.php?id=" . $linha['id'] ?>">  Excluir Aluno <a/></td>
					
                </tr>
                
                <?php
                  } while ($linha = mysqli_fetch_assoc($dados));
                  mysqli_free_result($dados);}
                  mysqli_close($mysqllink);
                  
                ?>
             
            </table>
			
                 <p>  <a href="index.php">Voltar </a>  </p>    
  
</article>

<footer>Sistema Locadora</footer>

</div>

</body>
</html>
</html>
