<?php

defined('_SCHECK') or die('Acesso negado.');

class Usuarios {
	public $db_connection = null;

	public function __construct($curr_connection) {
		$this->db_connection = $curr_connection;
	}

	public function searchUser($user_name) {
		$sql_query = 'SELECT * FROM `users` WHERE user_name = :user_name';
		$sql_result = $this->db_connection->prepare($sql_query);
		$sql_result->bindParam(':user_name', $user_name, PDO::PARAM_STR);
		$sql_result->execute();

		return $sql_result->fetch(PDO::FETCH_ASSOC);
	}
}