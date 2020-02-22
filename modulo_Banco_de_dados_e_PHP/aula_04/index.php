<?php

	$pdo= new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 2;

	//OR funciona como 'OU'
	//AND funciona como 'E'
	//DELETE FROM se deixar sem, apos determinar a tabela, ele delete todo o conteudo da tabela.

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	if($sql->execute(array($id))){
		echo 'Meu cliente foi deletado com sucesso';
	}

?>