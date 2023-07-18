<html lang="pt-br">
<head>
	<title>Cadastro</title>
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
	
	<!-- cadastro -->
	<div class="div-teste d-flex flex-column justify-content-around cadastro">
		<span class="titulo-login">Login</span>
		<form class="d-flex flex-column justify-content-between form-cadastro">
			<div class="d-flex justify-content-around">
				<!-- nome completo -->
				<input class="input-duplo" type="" placeholder="Nome completo" name="">
				
				<!-- cpf -->
				<input class="input-duplo" type="" placeholder="CPF" name="">	
			</div>

			<div class="d-flex justify-content-around">
				<!-- telefone -->
				<input class="input-duplo" type="" placeholder="Telefone" name="">
				
				<!-- data de nascimento -->
				<input class="input-duplo" type="" placeholder="Data de nascimento" name="">
			</div>
			
			<!-- email -->
			<input class="input-longo" type="" placeholder="E-mail" name="">
			
			<!-- senha -->
			<div class="d-flex justify-content-around">
				<input class="input-duplo" type="" placeholder="Senha" name="">
				<input class="input-duplo" type="" placeholder="Confirme a senha" name="">
			</div>	
		</form>
		
		

		<!-- botão -->
		<div class="d-flex justify-content-center">	
			<div class="botao-entrar div-botao rounded" onclick="mudarPagina(parseInt(document.getElementById('pagina').value))">
				<p class="centralizar-texto-botao">Continuar</p>
			</div>	
		</div>
	</div>





	<!-- endereço -->
	<div class="div-teste d-flex flex-column justify-content-around cadastro">
		<span class="titulo-login">Cadastrar-se</span>
		<form class="d-flex flex-column justify-content-between form-cadastro">
			
			<!-- CEP -->
			<input class="input-duplo" style="margin-left: 15px;" type="" placeholder="CEP" name="">
	
			<!-- Rua -->
			<input class="input-longo" type="" placeholder="Rua" name="">
			<div class="d-flex justify-content-around">
				<!-- numero -->
				<input class="input-duplo" type="" placeholder="Número" name="">
				
				<!-- complemento -->
				<input class="input-duplo" type="" placeholder="Complemento" name="">
			</div>
			<div class="d-flex justify-content-between div-endereco" style="width:530px">
				<!-- estado -->
				<input class="input-duplo input-estado" type="" placeholder="UF" name=""><!-- Cidade -->
				<input class="input-duplo input-cidade" type="" placeholder="Ciedade" name="">
				<!-- bairro -->
				<input class="input-duplo input-cidade" type="" placeholder="Bairro" name="">
			</div>
			
			
			<!-- Referencia -->
			<input class="input-longo" type="" placeholder="Refêrencia" name="">
		</form>
		
		

		<!-- botão -->
		<div class="d-flex justify-content-center">	
			<div class="botao-entrar div-botao rounded" onclick="mudarPagina(parseInt(document.getElementById('pagina').value))">
				<p class="centralizar-texto-botao">Cadastrar</p>
			</div>	
		</div>
	</div>

	<!-- rodapé -->
	<?php require "footer.php" ?>
</body>
</html>