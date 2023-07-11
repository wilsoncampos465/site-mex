<html lang="pt-br">
<head>
	<title>Meus dados</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "icon" href = "imagens/iconeAba.png"/>
	<link rel = "stylesheet" href = "bootstrap.css">
	<link rel = "stylesheet" href = "estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body id="body">
	<!-- barra de navegação -->
	<?php require "nav-bar.php" ?>
	<!-- atualizar dados -->
	<div class="d-flex flex-column">
		<!-- endereço -->
		<span>endereço</span>
		<input type="" placeholder="endereço antigo" name="">
		<!-- email -->
		<span>e-mail</span>
		<input type="" placeholder="e-mail antigo" name="">
		<!-- telefone -->
		<span>telefone</span>
		<input type="" placeholder="telefone antigo" name="">
		<!-- cpf -->
		<span>CPF</span>
		<input type="" placeholder="CPF antigo" name="">
		<div class="botao-pesquisa rounded" onclick="mudarPagina(parseInt(document.getElementById('pagina').value))">
			<p class="centralizar-comprar">Aplicar</p>
		</div>
	</div>
		
	<!-- rodapé -->
	<?php include "footer.php" ?>
</body>
</html>