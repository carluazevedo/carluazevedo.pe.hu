<?php

if (isset($_GET['act'])) {
	switch ($_GET['act']) {
		case 'record':
			require_once('record.php');
			break;
		case 'edit':
			require_once('edit.php');
			break;
		case 'remove':
			require_once('remove.php');
			break;
	}
} else {
	require_once('table.php');
}

/**
 * Método de requisição 'GET' encurtado
if (isset($_GET['record'])) {
	require_once('record.php');
}
 */