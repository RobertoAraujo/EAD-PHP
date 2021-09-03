<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Sistemas EAD</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/auxiliar.css">
		<link rel="stylesheet" type="text/css" href="css/grade.css">
		<link rel="stylesheet" type="text/css" href="css/m-style.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/js.js"></script>

	</head>
<body class="base-login" style="background-image: url(img/bag.png);">
	<div class="caixa-login position-relative" >
		<!-- <img src="img/img-topo-login.png/"> -->
			<form method="POST" action="valida.php">
					<h1 style="font-family:Impact, fantasy; color:#e63415;"> ACESSO - EAD </h1>
					<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
					?>
					<label>
						<input type="text" name="usuario" value="" placeholder="usuario">
					</label>
					<label>
						<input type="password" name="senha" value="" placeholder="Senha">
					</label>
					<input type="submit" name="btnLogin" value="Entrar" class="btn">
			</form>



	<div class=" mostrasenha">
		<div class="caixa">
			<span class="sair senha">[ X ]</span>
			<h1 class="h3 mb-0 pb-1" style="font-family:Impact, fantasy; color:#e63415;">Esqueci minha senha </h1>
			<p class="text-center pb-4" >Digite seu email para recuperar sua senha</p>
			<form action="" method="post">
				<label>
					<input type="text" value="" placeholder="Inserir email">
				</label>
				</label>
				<input type="submit" value="Enviar" class="btn">
			</form>
		</div>
	</div>
	&nbsp <a href="" class="senha text-azul mt-6 d-block">Recuperar</a>
	</div>
</body>
</html>
