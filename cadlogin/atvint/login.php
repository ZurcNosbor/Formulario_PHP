<!DOCTYPE html>
<html lang= "pt-br">
<head>
	<title>LOGIN</title>
	<meta charset= "UTF-8"/>
	<meta name="author" content="Robson Cruz de Melo">
	<meta name= "description" content= "Atividade Integradora">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body class="corpo">
   <form method = "post" action="">
        <fieldset class="field">

        <!-REALIZAR LOGIN->
        <legend>Digite seus dados para fazer login no sistema</legend>

        <div class="input-group mb-3">
        <span class="input-group-text" >Email:</span>
        <input type="email" class="form-control" placeholder="Digite seu email" aria-label="email" name="email_login" required>
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" >Senha:</span>
        <input type="password" class="form-control" name="senha_login" required>
        </div>

        <input class="btn btn-dark" type="submit" value="Logar">
        <input class="btn btn-dark" type="reset" value="Limpar campos">
        <br>
        <a href="index.php" class="voltar">VOLTAR</a>


        </fieldset>
   </form>
</body>

</html>

<?php

    //CONEXÃO COM O ARQUIVO CONFIG.PHP
    include('config.php');

    //CONDICIONAL PARA VALIDAR SE FOI PREENCHIDO OS CAMPOS
    if(isset($_POST['email_login']) || isset($_POST['senha_login'])){

        //LIMPAR A STRING
        $email = $conn->real_escape_string($_POST['email_login']);
        $senha = $conn->real_escape_string($_POST['senha_login']);

        //SELECIONA TODOS OS EMAIL PARA VERIFICAÇÃO
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' LIMIT 1";
        $sql_query = $conn->query($sql_code) or die("falha na execução do codigo sql: " . $conn->error);
        
        $quantidade = $sql_query->num_rows;
        
        //CONDICONAL PARA LOGAR NO SISTEMA 
        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            //CRIANDO SESSÃO
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            //MANDA O USUARIO PARA PAGINA PAINEL.PHP
            header("location: painel.php");

        }else{

            //CASO USUARIO DIGITE AS CREDENCIAIS ERRADAS OU NÃO EXISTA CONTA
            print "<script>alert('Não foi possível logar, email ou senha incorretos!!');</script>";
		    print "<script>location.href='login.php';</script>";
        }
    }

?>

