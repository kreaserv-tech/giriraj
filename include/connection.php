	<?php

	try{
		$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root','root');
	}catch(PDOEception $e){
		exit('Database error.');
	}


	?>

