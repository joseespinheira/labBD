<!DOCTYPE html>



<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<div class="container">

<header>
   <h1>Sistema de Clientes Locadora</h1>
</header>
  
<nav>
  <ul>
    <li><a href="antes.php">Cadastro Clientes</a></li>
    <li><a href="listaclientes.php">Listagem Clientes</a></li>
    <li><h3><a href="index.php">Novo Sistema</a></h3></li>
  </ul>
</nav>

<article>
  <h1>Cadastro de Clientes </h1>
  
<form action="salvarp.php" >

   
 
<label for="input1" class="alinha">Nome:</label>
<input type="text" name="nome"></br>

<label for="input2" class="alinha">CPF:</label>
<input type="text" name="cpf"/> </br>

<label for="input3" class="alinha">Endereço:</label>
<input type="text" name="endereco"/> </br>

<label for="input4" class="alinha"> Data Cadastro:</label>
<input type="text" name="dt_cadastro"/> </br>

<label for="input5" class="alinha"> Saldo Devedor:</label>
<input type="text" name="sl_devedor"/>  </br>
      
   
<label for="input6" class="alinha"  > Situacao:</label> 
<select name="situacao" > 

  <option value="Atraso">Em Atraso</option>
  <option value="Regular">Em Dia</option>
 
</select> 

  
 <p>  <input type="submit" value="Adicionar"/>  </p>



</form>

  
  
  
</article>

<footer>Sistema Locadora</footer>

</div>

</body>
</html>
