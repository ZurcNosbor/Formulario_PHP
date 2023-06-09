<!DOCTYPE html>
<html lang= "pt-br">
<head>
	<title>CADASTRO</title>
	<meta charset= "UTF-8"/>
	<meta name="author" content="Robson Cruz de Melo">
	<meta name= "description" content= "Atividade Integradora">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body class="corpo">

   <!-FORMULARIO DO CADASTRO DE NOVO USUARIO->
   <form method = "post" action="dados.php">
        <fieldset class="field">

        <legend>Digite seus dados para cadastrar um novo usuário</legend>

        <div class="input-group mb-3">
        <span class="input-group-text" >Nome completo:</span>
        <input type="text" class="form-control" placeholder="Digite seu nome completo" aria-label="nome" name="nome" required>
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" >Email:</span>
        <input type="email" class="form-control" placeholder="Digite seu email" aria-label="email" name="email" required>
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" >Senha:</span>
        <input type="password" class="form-control" name="senha" required>
        </div>

        <input class="btn btn-dark" type="submit" value="Cadastrar usuário">
        <input class="btn btn-dark" type="reset" value="Limpar campos">
        <br>
        <a href="index.php" class="voltar">VOLTAR</a>


        </fieldset>
   </form>
</body>

</html>

