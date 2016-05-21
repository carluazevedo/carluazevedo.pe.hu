<?php

defined('_SCHECK') or die('Acesso negado.');

/**
 * Função que armazena as últimas versões de scripts, folhas de estilo e plugins
 * Os argumentos da função são:
 * "bootstrap.css"
 * "bootstrap-theme.css"
 * "jquery.js"
 * "bootstrap.js"
 *
function latestVersions($latestVersionItem) {
	$bootstrap_version = '3.3.6';
	$jquery_version = '1.12.0';
    switch($latestVersionItem) {
        case "bootstrap.css":
            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/' . $bootstrap_version . '/css/bootstrap.min.css">',PHP_EOL;
            break;
        case "bootstrap-theme.css":
            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/' . $bootstrap_version . '/css/bootstrap-theme.min.css">',PHP_EOL;
            break;
        case "jquery.js":
            echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/' . $jquery_version . '/jquery.min.js"></script>',PHP_EOL;
            break;
        case "bootstrap.js":
            echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/' . $bootstrap_version . '/js/bootstrap.min.js"></script>',PHP_EOL;
            break;
    }
}
 */

### Funções para 'registroponto' : INÍCIO ###
function zeroTime($time) {
    if ($time == '00:00') {
        echo '-';
    } else {
        echo $time;
    }
}

function emptyObs($obs) {
    if ($obs == '') {
        echo '-';
    } else {
        echo $obs;
    }
}

function postCount() {
	if (count($_POST) > 0) {
		return true;
	}

	return false;
}
### Funções para 'registroponto' : FIM ###