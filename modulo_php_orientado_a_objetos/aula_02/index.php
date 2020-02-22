<?php
	include('Exemplo.class.php');
	//Instancia de objeto!
	$exemplo = new Exemplo();
	$exemplo->setVar1('Roger');
	echo $exemplo->pegaVar1();
	//$exemplo->var2 = 'Roger';
	echo '<hr />';
	$exemplo2 = new Exemplo;
	$exemplo2->setVar1('New');
	echo $exemplo2->pegaVar1();
	//$exemplo2->var2 = 'New';
	/*
	echo $exemplo->var2;
	echo '<br />';
	echo $exemplo2->var2;
	*/

	//Exemplo::$var3 = 'Outra variavel';
	//echo Exemplo::$var3;

	//Exemplo::metodostatic();
?>