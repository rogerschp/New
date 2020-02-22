<?php

	//CHAMANDO CONSTANTE NO PHP ORIENTADO A OBJETOS
	
	class MinhaClasse
	{
		
		const VALOR = 300;
		public function __construct(){
			echo self::VALOR;
			//NAO SE PODE ALTERAR UM VALOR DENTRO DA CONSTANTE!
		}
	}

	//new MinhaClasse();
	echo MinhaClasse::VALOR;
?>