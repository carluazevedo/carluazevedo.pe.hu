<?php

/**
 * Mantém a sessão exitente
 */
session_start();

/**
 * Verifica se existe a sessão do usuário atual
 */
if(!isset($_SESSION['user_name']) && !isset($_SESSION['user_password'])) {
	session_unset();
	header('Location: ../index.php?error=1');
}

/**
 * Matriz contendo as variáveis de sessão
 */
$sessionData = $_SESSION;

define('_SCHECK', 1);

require_once('../../config.php');

/**
 * Variável que fornece o diretório atual da página
 */
$current_dir = 'kronacalc';

$user_includes = array(
	'<script src="plugins/meiomask/meiomask.min.js"></script>' . PHP_EOL,
	'<script src="plugins/enter2tab/enter2tab.js"></script>' . PHP_EOL,
    '<link href="' . Config::$basedir . 'a/styles/custom.css" rel="stylesheet">' . PHP_EOL,
	'<link href="' . Config::$basedir . 'a/styles/navbar.css" rel="stylesheet">' . PHP_EOL,
    '<link href="' . Config::$basedir . 'a/styles/sidemenu.css" rel="stylesheet">' . PHP_EOL,
    '<link href="' . Config::$basedir . 'a/styles/kronacalc.css" rel="stylesheet">' . PHP_EOL,
	'<meta name="author" content="Carlu P. Azevedo">' . PHP_EOL,
	'<meta name="description" content="Calculadora simples em jQuery">' . PHP_EOL,
	'<meta name="version" content="1.1.2">' . PHP_EOL,
	'<meta name="creation" content="24-set-2015">' . PHP_EOL,
	'<meta name="last-modification" content="27-fev-2016">' . PHP_EOL
);

/**
 * Matriz que fornece as localizações corretas para cada link no menu lateral
 */
$menu_links = array(
	Config::$basedir . 'a/',
	Config::$basedir . 'a/registroponto',
	'#')
;

require_once(TEMPLATES . '/main.php');