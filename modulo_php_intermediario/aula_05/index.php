<?php
 /*
		*Trabalahndo com horas e datas.
 */
		// date_default_timezone_set = setar horario local
		//date_default_timezone_set('America/Sao_Paulo');

		//date =  d/m/Y = formato de data utilizada no brasil... H:i:s = Formato de hora utilizado no brasil
		//time = adicionar segundos, php trabalha em formato de segundos. (exemplo abaixo adicionei 60seg e multipliquei por 10 o que deu 10 minutos.)
		//$data = date('d/m/Y H:i:s', time()+(60*10));

		//echo $data;

		$titulo_site = 'Titulo do meu site';
		include('header.php');



?>

<h1>Meu conteudo da home!</h1>

<?php
	include('footer.php');
?>