<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		<title><?php echo Config::$sitename . ' - ' . $sessionData['user_first_name']; ?></title>
		<link rel="icon" href="<?php echo Config::$basedir; ?>favicon.png" sizes="16x16" type="image/png">
		<!-- Bootstrap -->
		<!-- Última versão CSS compilada e minificada -->
		<link href="<?php echo Config::$basedir; ?>_bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Tema opcional -->
		<link href="<?php echo Config::$basedir; ?>_bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
		<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
		<script src="<?php echo Config::$basedir; ?>_jquery/jquery.min.js"></script>
		<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
		<!-- Última versão JavaScript compilada e minificada -->
		<script src="<?php echo Config::$basedir; ?>_bootstrap/js/bootstrap.min.js"></script>
		<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
		<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<?php foreach ($user_includes as $includes) { echo $includes; }; ?>
	</head>

	<body>
		<div class="container">
<?php require_once(TEMPLATES . '/navbar.php'); echo PHP_EOL; ?>
			<div class="container-fluid">
				<div class="row">
<?php require_once(TEMPLATES . '/sidemenu.php'); echo PHP_EOL; ?>
					<main>
<?php require_once('pagecontent.php'); echo PHP_EOL; ?>
					</main>
				</div>
			</div>
		</div>
	</body>
</html>