<?php
    /**
     * Fornece a função 'latestVersions()'
     */
    require_once("../_lib/functions.php");
?>
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		<title>Registro de Ponto - Cadastrar</title>
		<link rel="icon" href="../favicon.png" sizes="16x16" type="image/png">

		<!-- Bootstrap -->
		<!-- Última versão CSS compilada e minificada -->
		<?php latestVersions("bootstrap.css"); ?>
		<!-- Tema opcional -->
		<?php latestVersions("bootstrap-theme.css"); ?>

		<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
		<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="../_css/custom.css" rel="stylesheet">
		<link href="../_css/form-register.css" rel="stylesheet">
		<link href="../_css/site-menu.css" rel="stylesheet">
	</head>

	<body>
	    <div class="container">
<?php require_once("../_lib/site-navbar.php"); echo "\n"; ?>

			<div class="container-fluid">
				<div class="row">
<?php require_once("../_lib/site-menu.php"); echo "\n"; ?>

					<main class="col-sm-offset-4 col-sm-6">
						<form class="form-register" method="post" action="register_validation.php" id="formRegister" name="formRegister">
							<fieldset>
								<h2 class="form-register-heading">Cadastrar usuário</h2>

								<p>Preencha todos os campos abaixo</p>

								<label for="registerFstName" class="sr-only">Nome</label>
								<input type="text" id="registerFstName" name="registerFstName" class="form-control" placeholder="Nome" required autofocus>
								
								<label for="registerLstName" class="sr-only">Sobrenome</label>
								<input type="text" id="registerLstName" name="registerLstName" class="form-control" placeholder="Sobrenome" required>
								
								<label for="registerEmail" class="sr-only">Email</label>
								<input type="email" id="registerEmail" name="registerEmail" class="form-control" placeholder="Email" required>
								
								<label for="registerUser" class="sr-only">Nome de usuário</label>
								<input type="text" id="registerUser" name="registerUser" class="form-control" placeholder="Nome de usuário" required>
								
								<label for="registerPass" class="sr-only">Senha</label>
								<input type="password" id="registerPass" name="registerPass" class="form-control" placeholder="Senha" required>
								
								<button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
							</fieldset>
						</form>
					</main>
				</div>
			</div>
		</div>

<?php require_once("../_lib/site-footer.php"); echo "\n"; ?>

		<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
		<?php latestVersions("jquery.js"); ?>

		<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
		<!-- Última versão JavaScript compilada e minificada -->
		<?php latestVersions("bootstrap.js"); ?>
	</body>
</html>