<!DOCTYPE html>

<?php
session_start();
?>

<html lang="pt-pr">
<head>
	<meta charset="utf-8">
	<title>BW7:: ALUGUEL DE VEÍCULOS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="sistema/public/img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="public/css/reset.css" />
	<link rel="stylesheet" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="public/css/signin.css" />
	<script src="js/ie-emulation-modes-warning.js"></script>
</head>
<body class="text-center">
	<div class="form-signin">
		<img class="mb-4" src="public/img/logo.png" alt="" width="auto" height="50" />
		<h1 class="h4 mb-5 font-weight-normal">ALUGUEL DE VEÍCULOS</h1>
		
		  <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
        ?>
				
		<form method="post" action="sistema/login/index.php" id="formlogin" name="formlogin">        
			<input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuário" required autofocus />
			<input class="form-control" type="password" name="senha" id="inputPassword" placeholder="Senha" />
			<button class="btn btn-lg btn-primary btn-block mb-4" type="submit" value="LOGAR ">Login</button>
		</form>			
		<p class="mt-5 mb-3 text-muted"> &copy; BW7  SOLUÇÕES WEB</p>
	</div>
	 <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>