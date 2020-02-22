<?php
// codigo 'as' serve para "renomear" a classe
	include('class1.php');
	include('class2.php');

	use \Sessao1\class1 as classe_exemplo;

	$class1 = new classe_exemplo;

?>