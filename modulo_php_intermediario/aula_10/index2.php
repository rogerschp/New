<?php
//para fazer um sessao tem que usar o comando session start

//para destruir uma sessao usar session_destroy


session_start();
$_SESSION['nome'] = 'Roger';
$_SESSION[0]['nome'] = 'Roger';
session_destroy();



?>