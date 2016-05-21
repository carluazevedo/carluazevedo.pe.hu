<?php

if (postCount()) {
	$registro = array();

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

	$registro_ponto->insertRecords($registro);
	header('Location: ./');
	die();
}

$registro = array(
	'id'          => '',
	'data'        => date('Y-m-d'),
	'folga'       => 1,
	'entrada_1'   => '',
	'saida_1'     => '',
	'entrada_2'   => '',
	'saida_2'     => '',
	'observacoes' => ''
);

$page_title = 'Gravar ponto';

require_once('form.php');