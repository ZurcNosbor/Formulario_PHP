<?php

//CONEXÃO COM O ARQUIVO PROTECT.PHP
include('protect.php');

?>

<!DOCTYPE html>
<html lang= "pt-br">
<head>
	<title>PAINEL</title>
	<meta charset= "UTF-8"/>
	<meta name="author" content="Robson Cruz de Melo">
	<meta name= "description" content= "Atividade Integradora">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body class="corpo">
    <div class="field">

	<!-LOGADO NA CONTA, EXIBE MENSAGEM E NOME DO USUARIO->
    <h3>Bem vindo a sua conta, <?php echo $_SESSION['nome']; ?></h3>

    <p>
	<!-LINK QUE SAI DA CONTA->
    <a href="logout.php" class="voltar">Sair</a>
    </p>

    </div>
   
</body>

</html>
