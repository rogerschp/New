<?php
//Function = criar uma funcao propria.
	function mostrarNome($nome,$idade)
	{
		echo '<h2>Nome: </h2>'.$nome;
		echo '<hr>';
		echo 'Idade'.$idade;	
	}

	//mostrarNome('Roger',19);

	function calculadora($numero1 = 10, $numero2 = 10)
	{
		echo ($numero1 + $numero2);
	}

	//calculadora(20,20);

	function verdade()
	{
		return true;
	}

	function retornarString()
	{
		return 'Roger';
	}

	echo retornarString();

	$variavel = verdade();

?>