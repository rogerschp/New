<?php

	$pdo= new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 3;

	//OR funciona como 'OU'
	//AND funciona como 'E'

	//$sql = $pdo->prepare("UPDATE `clientes` SET nome='Rogerio',sobrenome='De Paula' WHERE id=$id");
	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Rogerio',sobrenome='Alves de Paula' WHERE nome='Robson' AND sobrenome='Alves'");

	if($sql->execute()){
		echo 'Meu cliente foi atualizado com sucesso';
	}

?>