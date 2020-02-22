<?php
/*EXEMPLOS DE CONCATENAçAO*/
	$frase = 'Meu Nome e ';
	$nome = 'Roger';
	$idade = 19;
	$nomedaclasse = 'box';

	define('NOME', 'JOAO ');

	echo ' Meu nome e '.NOME;

	//echo $frase.$nome.$idade; 

	// aspas duplas pode colocar a variavel normal, que o php entende.
	//echo "Meu nome e $nome";
	//porem existem situaçoes em que as aspas duplas podem dar conflito
	echo "<div class=\"$nomedaclasse\">Meu conteudo da div</div>";
?>