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

/**
 * Configura o fuso horário padrão utilizado por todas as funções de data e hora em um script 
 */
date_default_timezone_set('America/Sao_Paulo');

require_once('../../config.php');
require_once(LIB . '/functions.php');
require_once(CONFIG . '/db.php');
require_once(CLASSES . '/RegistroPonto.php');
$registro_ponto = new RegistroPonto($db_connection);

/**
 * Variável que fornece o diretório atual da página
 */
$current_dir = 'registroponto';

$user_includes = array(
    '<link href="' . Config::$basedir . 'a/styles/custom.css" rel="stylesheet">' . PHP_EOL,
	'<link href="' . Config::$basedir . 'a/styles/navbar.css" rel="stylesheet">' . PHP_EOL,
    '<link href="' . Config::$basedir . 'a/styles/sidemenu.css" rel="stylesheet">' . PHP_EOL,
    '<link href="' . Config::$basedir . 'a/styles/registroponto.css" rel="stylesheet">' . PHP_EOL
);

/**
 * Matriz que fornece as localizações corretas para cada link no menu lateral
 */
$menu_links = array(
    Config::$basedir . 'a/',
    '#',
    Config::$basedir . 'a/kronacalc'
);

require_once(TEMPLATES . '/main.php');