<?php

	$arr = array('Roger','Rogerio','Lais','Edjane');

//determinar uma chave so funciona no foreach
//ex:$arr = array('chave1'=>'Roger','Rogerio','Lais','Edjane');

	/*foreach ($arr as $key => $value)
	{
		echo $key;
		echo '=>';
		echo $value;
		echo '<hr>';
	}
*/

	$total= count($arr);

	for($i = 0; $i < $total; $i++)
	{
		echo $arr[$i];
		echo '<br />';
	}
?>