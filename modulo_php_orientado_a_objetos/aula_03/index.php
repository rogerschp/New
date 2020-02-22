<?php
	
	class Filha{

		/*protected function testfunction(){
			echo 'Call test function';
		}
		*/

		private function testfunction(){
			echo 'Call test function';
		}

		public function printHello(){
			$this->testfunction();
			echo 'Hello World';
		}
	}

	class Pai extends Filha{

		public function printHello(){
			parent::printHello();
			echo '<br />';
			echo 'new function';
		}

		public function printBye(){
			echo 'Bye World!';
			echo '<br />';
			$this->testfunction();

		}

	}

	//$pai = new Pai;

	//$pai->printBye();

	$pai = new Pai;

	//$pai->printBye();
	$pai->printHello();

	//$filha->printHello();


?>