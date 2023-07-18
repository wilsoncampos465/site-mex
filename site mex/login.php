<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "icon" href = "imagens/icone-aba.png"/>
	<link rel = "stylesheet" href = "bootstrap.css">
	<link rel = "stylesheet" href = "estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body id="body">
	<!-- barra de navegação -->
	<?php require "nav-bar.php" ?>
	
	<!-- tela de login -->
	<div class="div-teste login d-flex flex-column justify-content-between">
		<span class="titulo-login">Login</span>
		<form>
			<input class="input" type="text" placeholder="CPF ou e-mail" name="">
			<br><br>
			<input class="input" type="password" placeholder="Senha" name="">
			<br>

			<div class="centralizar-texto-botao" style="margin-top: 50px;">
				<div class="botao-entrar div-botao rounded" onclick="mudarPagina(parseInt(document.getElementById('pagina').value))">
					<p class="centralizar-texto-botao">Entrar</p>
				</div>		
			</div>
		</form>

		<div class="d-flex justify-content-around" style="margin-bottom: 10px;">
			<a href="">Esqueceu a senha?</a>
			<a href="cadastro.php">Criar conta</a>
		</div>
	</div>

	<!-- rodapé -->
	<?php require "footer.php" ?>
</body>
</html>