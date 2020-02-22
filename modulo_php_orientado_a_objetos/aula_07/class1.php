<?php
//namespace divide diversas classes dentro de um contexto

	namespace Sessao1;
	use Sessao2\class2;
class class1
{
	
	function __construct()
	{
		new class2();
		echo 'Class instanciada';
	}
}
?>