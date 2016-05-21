<?php

// Mantém a sessão
session_start();

define('_SCHECK', 1);

require_once('config.php');

// load the login class
require_once(CLASSES . '/Login.php');

$login = new Login();
$login->doLogout();
header('Location: index.php?ok=1');