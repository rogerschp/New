	<!DOCTYPE html>
	<html>
	<head>
		<title>Painel de Controle</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet"/>
	</head>
	<body>
		
		<div class="box-login">
			<form method="post">
				<input type="text" name="user" placeholder="Login..." required>
				<input type="text" name="password" placeholder="Senha..." required>
				<input type="submit" name="acao" value="Logar!">
			</form>
		</div><!--Caixa de login-->
		<!--Criando uma tag para caixa de login-->
	</body>
	</html>