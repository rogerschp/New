<?php

	session_start();
		
	$autoload = function($class){
		if($class == 'Email'){
			require_once('classes/phpmailer/PHPMailerAutoload.php');
			//require_ once permite a requisiçao apenas 1 vez
		}
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);


	define('INCLUDE_PATH','http://localhost/Tabacaria_on/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'Painel/');	
?>