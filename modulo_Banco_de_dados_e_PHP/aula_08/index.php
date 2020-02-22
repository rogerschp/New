<?php
	define('HOST','localhost');
	define('DB','modulo_8');
	define('USER','root');
	define('PASS','');

	try{
	$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); = utf8 significa que nunca teremos problemas com acentuaçao.
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); = mostra todos os erros, exatos.

	}catch(Exception $e){
		echo 'erro ao conectar';
	}
	//try e catch = caso errem a senha do bd, nao ira mostrar a senha no erro (EXTREMAMENTE IMPORTANTE COLOCAR ISSO.)
?>