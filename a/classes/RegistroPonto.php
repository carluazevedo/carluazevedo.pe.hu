<?php

defined('_SCHECK') or die('Acesso negado.');

class RegistroPonto {
	public $db_connection = null;

	public $number_of_lines = 0;

	public function __construct($curr_connection) {
		$this->db_connection = $curr_connection;
	}

	public function queryRecords() {
		$sql_query = "SELECT *,
			DATE_FORMAT(data,'%d/%m/%Y') AS data,
			TIME_FORMAT(entrada_1,'%H:%i') AS entrada_1,
			TIME_FORMAT(saida_1,'%H:%i') AS saida_1,
			TIME_FORMAT(entrada_2,'%H:%i') AS entrada_2,
			TIME_FORMAT(saida_2,'%H:%i') AS saida_2
			FROM `registro-ponto-carlu`
			ORDER BY `registro-ponto-carlu`.`data` DESC
			LIMIT 0, {$this->number_of_lines}";

		$sql_result = $this->db_connection->query($sql_query);

		$sql_data = array();

		while ($rows = $sql_result->fetch(PDO::FETCH_ASSOC)) {
			$sql_data[] = $rows;
		}

		return $sql_data;
	}

	public function insertRecords($records) {
		$sql_query = "INSERT INTO `registro-ponto-carlu`
		(data, folga, entrada_1, saida_1, entrada_2, saida_2, observacoes)
		VALUES
		(
		'{$records['data']}',
		'{$records['folga']}',
		'{$records['entrada_1']}',
		'{$records['saida_1']}',
		'{$records['entrada_2']}',
		'{$records['saida_2']}',
		UPPER('{$records['observacoes']}')
		)";

		$this->db_connection->query($sql_query);
	}

	public function searchRecords($id) {
		$sql_query = 'SELECT * FROM `registro-ponto-carlu` WHERE id = :id';
		$sql_result = $this->db_connection->prepare($sql_query);
		$sql_result->bindParam(':id', $id, PDO::PARAM_INT);
		$sql_result->execute();

		return $sql_result->fetch(PDO::FETCH_ASSOC);
	}

	public function editRecords($records) {
		$sql_query = "UPDATE `registro-ponto-carlu` SET
		`data`='{$records['data']}',
		`folga`='{$records['folga']}',
		`entrada_1`='{$records['entrada_1']}',
		`saida_1`='{$records['saida_1']}',
		`entrada_2`='{$records['entrada_2']}',
		`saida_2`='{$records['saida_2']}',
		`observacoes`=UPPER('{$records['observacoes']}')
		WHERE `id` = '{$records['id']}'";

		$this->db_connection->query($sql_query);
	}

	public function removeRecords($id) {
		$sql_query = 'DELETE FROM `registro-ponto-carlu` WHERE id = :id';
		$sql_result = $this->db_connection->prepare($sql_query);
		$sql_result->bindParam(':id', $id, PDO::PARAM_INT);
		$sql_result->execute();

		$this->db_connection->query($sql_result);
	}
}