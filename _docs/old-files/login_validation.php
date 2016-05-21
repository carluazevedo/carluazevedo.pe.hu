<?php
	/**
     * Inicia a sessão
     */
	session_start();

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
     * Variáveis de Usuário e Senha
     */
	$inputUser = $_POST['inputUser'];
	$inputPass = $_POST['inputPass'];

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

    $sqlQuery = "SELECT * FROM `users-test` WHERE `login_name` = '$inputUser' AND `login_passwd` = '$inputPass'";

    /**
     * Realiza uma consulta com os dados do usuário logado
     */
	$sqlResult = mysqli_query($conn,$sqlQuery);

    /**
     * Verifica se houve resultado positivo da consulta e libera acesso ao usuário
     */
    if (mysqli_num_rows($sqlResult) == 1) {
		$row = mysqli_fetch_assoc($sqlResult);
		$_SESSION['fstUsrName']  = $row['first_name'];
		$_SESSION['lstUsrName']  = $row['last_name'];
		$_SESSION['inputUser']   = $inputUser;
		$_SESSION['inputPass']   = $inputPass;
		$_SESSION['loginStatus'] = true;
		header('Location: site.php');
		/**
         * Fecha a conexão
         */
		//print_r($_SESSION);
		//print_r($row);
		//echo '<br><a href="site.php">Ir para site</a><br><a href="logout.php">Sair</a><br>';
        mysqli_close($conn);
    } else {
		unset($_SESSION['inputUser']);
		unset($_SESSION['inputPass']);
		header('Location: index.php?error=2');
	}

    /**
     * Fecha a conexão
     */
    //mysqli_close($conn);

    /**
     * Remove todas as variáveis da sessão ativa
     */
    //session_unset();

    /**
     * Encerra a sessão
     */
    //session_destroy();

    /**
     * FONTES:
     * 
     * http://www.devmedia.com.br/criando-sessao-para-login-no-php/27347
     */
?>