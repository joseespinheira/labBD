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
  <li><a href="index.php">Cadastro Clientes</a></li>
  <li><a href="listaclientes.php">Listagem Clientes</a></li>
     
  </ul>
</nav>

<article>

  <li><a href="clientes.php">Lista de todos os clientes</a></li>
  <li><a href="atraso.php">Lista de clientes em atraso</a></li>
  <li><a href="regular.php">Lista de clientes em dia</a></li>
  
</article>

<footer>Sistema Locadora</footer>

</div>

</body>
</html>
