<?php

	$nome = 'Roger';

	/*switch($nome)
	{
		case 'Roger':
			echo 'minha variavel e Roger';
			break;
		case 'Guilherme':
			echo 'minha variavel e Guilherme';
			break;


	}*/

	//Break para o loop for, while, do, foreach e switch;
	//continue para loop: for, while, do e foreach;

	//tem como usar o if sem chave, porem ele so vai ler o primeiro codigo abaixo da condiçao;

	for($i = 0; $i < 10; $i++)
	{
		if($i == 5)
			continue;
		echo $i;
		echo '<hr>';
		/*
		if($i == 5)
		{
			break;
		}*/
	}

?>