<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// LEFT JOIN = puxa da esquerda, mesmo que a informaçao nao bata. || RIGHT JOIN PEGA O CONTRARIO de acordo com o exemplo abaixo!
	$sql =$pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");
	$sql->execute();
	$clientes = $sql->fetchAll();
	foreach ($clientes as $key => $value) {
		
		echo $value['nome'];
		echo ' | ';
		echo $value['nome_cargo'];
		echo '<hr>';

	}

?>