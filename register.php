<?php

/**
 * Part of Joomla CMS
 * 
 * Constant that is checked in included files to prevent direct access.
 * define() is used in the installation folder rather than "const" to not error for PHP 5.2 and lower
 */
define('_SCHECK', 1);

require_once('config.php');

?>
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		<title><?php echo Config::$sitename; ?> - Cadastrar</title>
		<link rel="icon" href="<?php echo Config::$basedir?>a/favicon.png" sizes="16x16" type="image/png">
		<!-- Bootstrap -->
		<!-- Última versão CSS compilada e minificada -->
		<link href="<?php echo Config::$basedir?>_bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Tema opcional -->
		<link href="<?php echo Config::$basedir?>_bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
		<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
		<script src="<?php echo Config::$basedir?>_jquery/jquery.min.js"></script>
		<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
		<!-- Última versão JavaScript compilada e minificada -->
		<script src="<?php echo Config::$basedir?>_bootstrap/js/bootstrap.min.js"></script>
		<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
		<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="<?php echo Config::$basedir?>a/styles/custom.css" rel="stylesheet">
		<link href="<?php echo Config::$basedir?>a/styles/form-register.css" rel="stylesheet">
	</head>

	<body>
	    <div class="container">
<?php require_once(TEMPLATES . '/navbar_noncollapse.php'); echo PHP_EOL; ?>

			<div class="container-fluid">
				<div class="row">
					<main class="col-sm-offset-3 col-sm-6">
						<form class="form-register" method="post" action="" id="formRegister" name="formRegister">
							<fieldset>
								<h2 class="form-register-heading">Cadastrar usuário</h2>

								<p>Preencha todos os campos abaixo</p>

								<label for="registerFstName" class="sr-only">Nome</label>
								<input type="text" id="registerFstName" name="user_first_name" class="form-control" placeholder="Nome" required autofocus>
								
								<label for="registerLstName" class="sr-only">Sobrenome</label>
								<input type="text" id="registerLstName" name="user_last_name" class="form-control" placeholder="Sobrenome" required>
								
								<br>
								
								<label for="registerUser" class="sr-only">Nome de usuário</label>
								<input type="text" id="registerUser" name="user_name" class="form-control" placeholder="Nome de usuário" required>
								
								<label for="registerEmail" class="sr-only">Email</label>
								<input type="email" id="registerEmail" name="user_email" class="form-control" placeholder="Email" required>
								
								<div class="alert alert-success alert-thin text-center" role="alert">Mínimo de 6 caracteres para a senha</div>

								<label for="registerPassNew" class="sr-only">Senha</label>
								<input type="password" id="registerPassNew" name="user_password_new" class="form-control" placeholder="Senha" pattern=".{6,}" required>
								
								<label for="registerPassRep" class="sr-only">Repita a senha</label>
								<input type="password" id="registerPassRep" name="user_password_repeat" class="form-control" placeholder="Repita a senha" pattern=".{6,}" required>
								
								<button class="btn btn-lg btn-info btn-block" type="submit" name="register">Cadastrar</button>
							</fieldset>
						</form>
					</main>
				</div>
			</div>
		</div>
	</body>
</html>