<?php

if (isset($_POST['data']) && $_POST['data'] != '') {
	$registro = array();

	$registro['id'] = $_POST['id'];

	$registro['data'] = $_POST['data'];

	$registro['folga'] = $_POST['folga'];

	if (isset($_POST['entrada_1'])) {
		$registro['entrada_1'] = $_POST['entrada_1'];
	} else {
		$registro['entrada_1'] = '';
	}

	if (isset($_POST['saida_1'])) {
		$registro['saida_1'] = $_POST['saida_1'];
	} else {
		$registro['saida_1'] = '';
	}

	if (isset($_POST['entrada_2'])) {
		$registro['entrada_2'] = $_POST['entrada_2'];
	} else {
		$registro['entrada_2'] = '';
	}

	if (isset($_POST['saida_2'])) {
		$registro['saida_2'] = $_POST['saida_2'];
	} else {
		$registro['saida_2'] = '';
	}

	if (isset($_POST['observacoes'])) {
		$registro['observacoes'] = $_POST['observacoes'];
	} else {
		$registro['observacoes'] = '';
	}

	$registro_ponto->editRecords($registro);
	header('Location: ./');
	die();
}

$registro = $registro_ponto->searchRecords($_GET['id']);

$page_title = 'Editar registro';

require_once('form.php');