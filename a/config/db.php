<?php

defined('_SCHECK') or die('Acesso negado.');

/**
 * Configuration for: Database Connection
 *
 * For more information about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 * DB_PASS: the password of the above user
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 */
#DB_HOST: localhost
#DB_NAME: u632821943_cadb
#DB_USER: u632821943_causr
#DB_PASS: 225785_db
define('DB_HOST', 'localhost');
define('DB_NAME', 'u632821943_cadb');
define('DB_USER', 'mysql_user');
define('DB_PASS', '');

$db_connection = null;

try {
	$db_connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8', DB_USER, DB_PASS);
	// Set the PDO error mode to exception
	$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo 'Falha na conexão: ' . $e->getMessage();
}

/**
 * Conexão por MySQLi 
 *
 * @deprecated
 *
$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($db_connection->connect_error) {
	header('Content-Type:text/html;charset=UTF-8');
	die('Falha na conexão: ' . $db_connection->connect_error);
}

if ($db_connection->character_set_name() != 'utf8') {
	$db_connection->set_charset('utf8');
}
 */