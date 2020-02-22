<?php

//Array single.

$arr = ['Roger','Rogerio'];
$arr = array('Roger','chave2'=>'Rogerio');

$arr[0] = 'Roger';
$arr[] = 'Rogerio';

//Arrays Multidimensionais

//EX1:

//$arr2 = array(array('Roger','Rogerio'),array (19,59));
//echo $arr2[0][0];  //puxa a casa baseado no numero 
//EX2:

//$arr2[0] = array('Roger','Rogerio');
//echo $arr2[0][1];  //puxa a casa baseado no numero 

//EX3:

//$arr2[0] = array('chave1'=>'Roger','Rogerio');
//echo $arr2[0]['chave1'];//aqui ele puxa direto da chave

//EX4:

$arr2[0]['chave1'] = 'Roger';

echo $arr2[0]['chave1'];

?>