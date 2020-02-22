<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
	//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); = Mostrar os erros de no pdo.
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//GROUP BY = significa que ele agrupa por coluna, mostrando apenas 1 || LIMIT = limita a quantidade de dados que ira retornar, pode colocar mais de 1 casa, como no exemplo ativo abaixo.
	//$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo LIMIT 2");
	//ORDER BY ASC = Ordem cescente ou em ordem alfabetica || ORDER BY DESC = o contrario de ASC
	$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 1,3");
	$sql->execute();
	$clientes = $sql->fetchAll();
	foreach ($clientes as $key => $value) {
		
		echo $value['nome'];
		echo '<hr>';

	}
?>