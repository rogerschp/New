<!DOCTYPE html>
<html>
<head>
    <title>Painel de Controle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUE_PATH_PAINEL?>css/style.css" rel="stylesheet" />
</head>
<body>

    <div class="box-login">
            <h2>Efetue o login:</h2>
            <form method="post">
                <input type="text" name="user" placeholder="Login..." required>
                <input type="password" name="password" placeholder="Senha..." required>
                <input type="submit" name="acao" value="Logar!">
            </form>
    </div><!--box-login-->

</body>
</html>