<?php
	$this->assign('title','C9 | File Not Found');
	$this->assign('nav','home');

	$this->display('_Header.tpl.php');
?>

<div class="container">

	<h1>Erro!</h1>

	<!-- this is used by app.js for scraping -->
	<!-- ERROR The page you requested was not found /ERROR -->

	<p>A pagina requisitada não foi encontrada. <br/>Cod: 404</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>