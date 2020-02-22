<?php
	abstract class Teste{

		public $var;

		public function func1(){
			echo 'Chamando func1';
		}

		abstract function func2();


	}

	class Principal2{

		public static function outroMetodoEstatico(){
			echo 'meu outro metodo';
		}

	}

	class Principal extends Teste{

		public function func2(){
			echo 'estou declarando oficialment eum metodo abstrato';
		}

		public static function metodoestatico(){
			echo 'metodo estatico';
		}

		public function funcao(){
			//Principal::metodoestatico();
			//self::metodoestatico();
			Principal2::outroMetodoEstatico();
		}
	}

	$principal = new Principal;
	$principal -> funcao();
	Principal::metodoestatico();

	//$principal->func1();

	//$principal->func2();
?>