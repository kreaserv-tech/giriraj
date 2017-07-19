<?php

class Azhar{

	public function fetch_all(){
		global $pdo;

		$qurey = $pdo->prepare("SELECT * FROM articles");
		$qurey->execute();
		return $query->fetchAll();
	}
} 



?>