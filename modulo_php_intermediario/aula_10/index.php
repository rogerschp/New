<?php

session_start();
setcookie('nome','Roger',time() + (60*60*24), '/');

//para deletar o cookie apenas colocar um '-'.

echo $_COOKIE['nome'];



?>