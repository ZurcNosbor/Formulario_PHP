<!DOCTYPE html>
<html lang= "pt-br">
<head>
	<title>INÍCIO</title>
	<meta charset= "UTF-8"/>
	<meta name="author" content="Robson Cruz de Melo">
	<meta name= "description" content= "Atividade Integradora">
	<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body class="corpo">
    <div id="geral"> <!--INICIO DA TELA PRINCIPAL DO SISTEMA-->
        <header> 
			<h1 class="cabecalhoh1">BEM VINDO AO NOSSO SISTEMA!!</h1>
            <h2 class="cabecalhoh2">Escolha uma das opcões abaixo:</h4>
		</header> <!--Final do cabeçalho-->
        <nav>
			<ul>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="cadastro.php">CRIAR NOVO USUÁRIO</a></li>
		</nav> 
    </div>
	<div class="container"> 
		<div class="row">
			<div class="col mt-5">
				<?php

					//CONEXÃO COM A PAGINA CONFIG.PHP
					include("config.php");
				?>
			</div>
		</div>
	</div>
</body>
</html>
