<?php
	// Mantém a sessão
	session_start();
	
	// load the login class
	require_once("/classes/Login.php");

	$login = new Login();
	$login->doLogout();
	header('Location: /index.php?ok=1');
?>