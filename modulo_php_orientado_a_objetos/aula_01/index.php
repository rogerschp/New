<?php

	class Pessoa
	{
		//Objeto pessoa

		private $nome = 'Roger';
		private $idade = '19';
		private $peso = '61kg';

		public function crescer()
		{
			$this->comer();
			echo 'estou crescendo';
		}

		private function comer()
		{
			echo 'estou comendo';
		}
	}

	//INSTANCIAR OU SEJA CRIAR UM OBJETO NOVO TODA VEZ QUE EU FOR TRABALHAR

	$pessoa = new Pessoa;
	$pessoa2 = new Pessoa;

	$pessoa->crescer();
	

	//Private nao tem como chamar, pois ele esta privado.
	
	//Se tenho uma variavel privada e outra publica, e colocar um 'this' na publica chamando a privada, ela ira aparecer na pagina como se fosse publica.


?>