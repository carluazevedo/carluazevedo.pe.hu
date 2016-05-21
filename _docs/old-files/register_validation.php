<?php
	/**
	 * Define o charset para UTF-8
	 */
	header('Content-Type:text/html;charset=UTF-8');

	/**
	 * Arquivos com informações do banco de dados
	 * e com funções pré definidas
	 */
	require_once('../_lib/db_connect.php');
	require_once('../_lib/functions.php');

	/**
	 * Variáveis de cadastro de usuário
	 */
	$regFstName = $_POST['registerFstName'];
	$regLstName = $_POST['registerLstName'];
	$regEmail   = $_POST['registerEmail'];
	$regUser    = $_POST['registerUser'];
	$regPass    = $_POST['registerPass'];

	/**
     * Cria uma conexão
     * As constantes DB_HOST, DB_USER, DB_PASS, DB_NAME estão declaradas em 'db_connect.php'
     */
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	/**
	 * Verifica a conexão
	 */
	if (!$conn) {
		die("Falha na conexão: " . mysqli_connect_error());
	}

    /**
     * Testa e altera o charset para 'utf8'
     * Função contida em 'functions.php'
     * O argumento da função é a variável com as informações da conexão
     */
    setCharset($conn);

    $sqlQuery = "INSERT INTO `users-test` (`user_locked`, `login_name`, `login_passwd`, `first_name`, `last_name`, `email`)
    VALUES (1, '$regUser', '$regPass', '$regFstName', '$regLstName', '$regEmail')";

    /**
     * Executa o comando 
     */
	$sqlResult = mysqli_query($conn,$sqlQuery);

	/**
	 * Fecha a conexão
	 */
	mysqli_close($conn);

	header('Location: index.php?ok=2');

    /**
     * FONTES:
     * 
     * http://pt.stackoverflow.com/questions/3571/qual-o-melhor-jeito-de-fazer-um-sistema-de-login-em-senha-com-php
     * http://blog.thiagobelem.net/php-5-5-api-de-senhas/
     * http://imasters.com.br/linguagens/php/aplicando-postredirectget-pattern-na-pratica-com-php/
     */
?>