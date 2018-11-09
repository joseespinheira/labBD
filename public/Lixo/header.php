<?php

include_once "config.php";
include "funcao-01.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cabecario.css">
    <link rel="stylesheet" href="css/corpo.css">
    <link rel="stylesheet" href="css/formulario.css">
    <style>
        .menucad li{float: left; padding: 6px; border-top: 2px solid #c0c0c0; font-family: 'Calibri'; color: #629bff; text-transform: uppercase; }
        .menucad li:hover{border-top: 2px solid #35bfed; background-color: #c0c0c0; }
    </style>
</head>
<body>
<header id="cabecario">

<div id="areadebusca">
      <ul class="menucad">
            <a href=""><li>Home</li></a>
            <a href="emprestimo.php"><li>Emprestimo</li></a>
            <a href="pessoa.php"><li>Pessoa</li></a>
            <a href="acervo.php"><li>Acervo</li></a>
            <a href="autor.php"><li>Autor</li></a>
            <a href="genero.php"><li>Genêro</li></a>
            <a href="editora.php"><li>Editora</li></a>
            <a href="categoria.php"><li>Categoria</li></a>
            <a href="acervo_has_autor.php"><li>Acervo_autor</li></a>
        </ul>
</div>

<ul id="menu-icones">
        <li class="email-icone" onclick="AparecerDiv();" style="cursor: pointer";  ></li>
        <li class="lixeira-icone"></li>
        <li class="notificacao-icone"></li>
        <li class="user-icone"></li>
    </ul>

</header>