<?php

define('_SCHECK', 1);

require_once('../config.php');

?>
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		<title>Calculadora</title>
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

		<script src="plugins/meiomask/meiomask.min.js"></script>
		<script src="plugins/enter2tab/enter2tab.js"></script>

		<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
		<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link href="<?php echo Config::$basedir; ?>a/styles/kronacalc.css" rel="stylesheet">

		<!-- Folha de estilo da página principal -->
		<link href="<?php echo Config::$basedir; ?>a/styles/custom.css" rel="stylesheet">

		<meta name="author" content="Carlu P. Azevedo">
		<meta name="description" content="Calculadora simples em jQuery">
		<meta name="version" content="1.1.1">
		<meta name="creation" content="24-set-2015">
		<meta name="last-modification" content="26-fev-2016">
	</head>

	<body>
		<div class="container">
<?php require_once(TEMPLATES . '/navbar_noncollapse.php'); echo PHP_EOL; ?>
			<div class="container-fluid">
				<div class="row">
					<main class="col-sm-offset-3 col-sm-6">
						<h2 class="text-center" style="margin-bottom: 1px">Calculadora de Valor e Peso</h2>
						<form name="calcform" method="post" action="">
							<fieldset>
								<label class="text-center labvalor">VALOR</label>
								<label class="text-center labpeso">PESO</label>

								<input type="text" name="valor1" id="valor1" class="form-control valor" value=0>
								<input type="text" name="peso1" id="peso1" class="form-control peso" value=0>

								<input type="text" name="valor2" id="valor2" class="form-control valor" value=0>
								<input type="text" name="peso2" id="peso2" class="form-control peso" value=0>

								<input type="text" name="valor3" id="valor3" class="form-control valor" value=0>
								<input type="text" name="peso3" id="peso3" class="form-control peso" value=0>

								<input type="text" name="valor4" id="valor4" class="form-control valor" value=0>
								<input type="text" name="peso4" id="peso4" class="form-control peso" value=0>

								<input type="text" name="valor5" id="valor5" class="form-control valor" value=0>
								<input type="text" name="peso5" id="peso5" class="form-control peso" value=0>

								<input type="text" name="valor6" id="valor6" class="form-control valor" value=0>
								<input type="text" name="peso6" id="peso6" class="form-control peso" value=0>

								<input type="text" name="valor7" id="valor7" class="form-control valor" value=0>
								<input type="text" name="peso7" id="peso7" class="form-control peso" value=0>

								<input type="text" name="valor8" id="valor8" class="form-control valor" value=0>
								<input type="text" name="peso8" id="peso8" class="form-control peso" value=0>

								<input type="text" name="valor9" id="valor9" class="form-control valor" value=0>
								<input type="text" name="peso9" id="peso9" class="form-control peso" value=0>

								<input type="text" name="valor10" id="valor10" class="form-control valor" value=0>
								<input type="text" name="peso10" id="peso10" class="form-control peso" value=0>

								<input type="button" value="Calcular" id="somar" class="btn btn-success form-control somar">
								<input type="button" value="Limpar campos" id="resetar" class="btn btn-danger form-control resetar" onclick="location.reload(true)">

								<label id="total" class="text-center">TOTAL</label>
			
								<input type="text" name="resvalor" id="resvalor" class="form-control text-right resvalor" value="0,00" readonly>
								<input type="text" name="respeso" id="respeso" class="form-control text-right respeso" value="0,000" readonly>
							</fieldset>
						</form>
					</main>
				</div>
			</div>
		</div>

		<!-- Calculadora em jQuery | Autor: Carlu P. Azevedo -->
		<script>
			$(document).ready(function(){
				// Dá foco para campo 'valor1' ao carregar página
				window.onload = function(){var input = document.getElementById("valor1").focus();}

				var somavalor = 0,
					somapeso = 0;

				$("form").find(".valor").setMask("moeda");
				$("form").find(".peso").setMask("peso");

				$("#somar").click(function() {
					$("form").find(".valor").each(function(){
						somavalor += parseFloat($(this).val().replace(",", "."));
					});

					$("form").find(".peso").each(function(index){
						somapeso += parseFloat($(this).val().replace(",", "."));
					});

					$("#resvalor").val(somavalor.toFixed(2).replace(".", ","));
					$("#respeso").val(somapeso.toFixed(3).replace(".", ","));
					
					$("#resvalor").setMask("moeda-decimal");
					$("#respeso").setMask("peso-decimal");

					somavalor = 0;
					somapeso = 0;
				});
			});
		</script>
	</body>
</html>
<?php

/**
 * FONTES:
 * www.w3schools.com
 * www.getbootstrap.com
 * www.github.com/fabiomcosta
 * 
 * www.developer.mozilla.org/pt-PT/docs/utilizando_meta_tags
 * www.devin.com.br/calculadoras-javascript
 * www.marciocardoso.net/blog/?p=304
 * www.w3schools.com/jquery/jquery_examples.asp (jQuery HTML Set Content and Attributes)
 * www.codigofonte.uol.com.br/codigos/trocar-tab-pelo-enter-em-formularios-de-forma-simples
 * www.stackoverflow.com/questions/1009808/enter-key-press-behaves-like-a-tab-in-javascript
 */

?>