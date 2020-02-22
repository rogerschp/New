<?php

	include('interface1.php');

	class Teste implements interface1{

		public function printOnScreen($par){
			echo $par;
		}
	}

	$teste = new Teste;

	$teste->printOnScreen('Hello World');

	//Toda vez em que eu for usar um interface, todos os metodos precisam ser colocados dentro do arquivo secundario (esse).
?>