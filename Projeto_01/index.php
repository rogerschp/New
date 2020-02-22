<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabacaria ON</title>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Tabacaria, narguile">
	<meta name="description" content="Narguile">
	<meta charset="utf-8"/>
</head>
<body>
		<!--<?php
			/*if(isset($_POST['acao'])){
				//Enviei o formulario
				if($_POST['email'] != ''){
					$email = $_POST['email'];
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
						//Tudo ok! isso e um email.
						//Apenas Enviar.
						$mail = new Email('','','','');
						$mail->addAddress('','');
						$info = array('assunto'=>'Um novo E-mail cadrastado no site!','corpo'=>$email);
						$mail->formatarEmail($info);
						if($mail->enviarEmail()){
							echo '<script>alert("Enviado com sucesso!")</script>';
						}else{
							echo '<script>alert("Algo deu errado.")</script>';
						}
					}else{
						echo '<script>alert("Nao e um e-mail valido")</script>';
					}
				}else{
					echo '<script>alert("Campos vazios nao sao permitidos!")</script>'
				}
			}*/
		?>-->
<?php
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	switch ($url) {
		case 'sobre':
			echo '<target target="sobre" />';
			break;

		case 'servicos':
				echo '<target target="servicos" />';
				break;
	}
?>

<?php new Email(); ?>

	<header>
		<div class="center">
			<div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-navicon" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!--clear-->
	</div><!--center-->
	</header>
	
	<?php

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}
		else{
			if($url != 'sobre' && $url != 'servicos'){
				$pagina404= true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}

	?>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="down">
		<p>Todos os direitos reservados</p>
	</div><!--down-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<?php 
		if($url == 'home' || $url == ''){
	 ?>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
<?php } ?>
	<?php 
		if($url == 'contato'){
	 ?>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src=<?php echo INCLUDE_PATH; ?>js/map.js></script>
	<?php } ?><!--Exemplo de otimizacao.(Mapa vai carregar apenas na pagina contatos.)-->
</body>
</html>