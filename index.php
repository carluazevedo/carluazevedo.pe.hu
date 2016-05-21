<?php

session_start();

/**
 * Verifica se existe a sessão do usuário atual
 * e redireciona para o diretório do sistema
 */
if(isset($_SESSION['user_login_status'])) {
	if($_SESSION['user_login_status'] == true)	{
		header('Location: a/');
	}
} else {
	session_unset();
}

/**
 * Part of PHP Login Script / MINIMAL VERSION
 */

/**
 * checking for minimum PHP version
 */
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
	exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
	/**
	 * if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
	 * (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
	 */
	require_once('a/libraries/password_compatibility_library.php');
}

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
		<title><?php echo Config::$sitename; ?></title>
		<link rel="icon" href="<?php echo Config::$basedir?>favicon.png" sizes="16x16" type="image/png">
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
		<link href="<?php echo Config::$basedir?>a/styles/form-login.css" rel="stylesheet">
	</head>

	<body>
	    <div class="container">
<?php require_once(TEMPLATES . '/navbar_noncollapse.php'); echo PHP_EOL; ?>

			<div class="container-fluid">
				<div class="row">
					<main class="col-sm-offset-3 col-sm-6">
						<form class="form-login" method="post" action="login_validation.php" id="formLogin" name="formLogin">
							<fieldset>
								<h2 class="form-login-heading">Entrar no sistema</h2>
								
								<label for="user_name" class="sr-only">Usuário</label>
								<input type="text" id="user_name" name="user_name" class="form-control" placeholder="Usuário" required autofocus>
								
								<label for="user_password" class="sr-only">Senha</label>
								<input type="password" id="user_password" name="user_password" class="form-control" placeholder="Senha" required>
								
								<div class="checkbox">
									<label>
										<input type="checkbox" value="lembrarSenha">Lembrar senha
									</label>
								</div>
								
								<button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Entrar</button>
								<?php //<button class="btn btn-lg btn-info btn-block" type="button" onClick="location.href = 'register.php'">Cadastrar usuário</button>; ?>
								<?php
								if (isset($_GET["ok"])) :
									switch ($_GET["ok"]) :
										case "1":
								?>
								<div class="alert alert-success" role="alert">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Desconectado com sucesso
								</div>
								<?php
											break;
										case "2":
								?>
								<div class="alert alert-success" role="alert">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Usuário cadastrado com sucesso
								</div>
								<?php
											break;
									endswitch;
								endif;

								if (isset($_GET["error"])) :
									switch ($_GET["error"]) :
										case "1":
								?>
								<div class="alert alert-danger" role="alert">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Usuário ou senha incorretos
								</div>
								<?php
											break;
										case "2":
								?>
								<div class="alert alert-warning" role="alert">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Acesso não permitido
								</div>
								<?php
											break;
									endswitch;
								endif;
								?>
							</fieldset>
						</form>
					</main>
				</div>
			</div>
		</div>
	</body>
</html>