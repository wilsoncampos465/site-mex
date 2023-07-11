<html lang="pt-br">
<head>
	<title>Perfil</title>
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
	<!-- perfil -->
	<div class="d-flex w-100 div-teste">
		<div class="opcoes div-teste d-flex flex-column">
			<!-- mudar senha -->
			<a href="mudar-senha.php">mudar senha</a>
			<!-- dados -->
			<a href="atualizar-dados.php">atualizar dados</a>
		</div>
		<div>
			<div class="div-teste d-flex flex-column">
				<!-- historico -->
				<span>Pedidos</span>
				<div class="div-test d-flex pedidos justify-content-between">
					<!-- data -->
					<div class="div-teste item-carrinho">
						<span>Data</span>
					</div>
					<!-- preço -->
					<div class="div-teste item-carrinho">
						<span>Total</span>
					</div>
					<!-- exibit nota -->
					<div class="div-teste item-carrinho">
						<span>Nota Fiscal</span>
					</div>
					<!-- numero do pedido -->
					<div class="div-teste item-carrinho">
						<span>Número do Pedido</span>
					</div>
					<!-- botão de detalhes -->
					<div class="div-teste item-carrinho">
						<span>Mais detalhes</span>
					</div>
				</div>
			</div>
			<div class="div-teste d-flex flex-column">
				<div class="div-test d-flex pedidos justify-content-between">
					<!-- data -->
					<div class="div-teste item-carrinho">
						<span>01/01/2000</span>
					</div>
					<!-- preço -->
					<div class="div-teste item-carrinho">
						<span> R$ 123456</span>
					</div>
					<!-- exibit nota -->
					<div class="div-teste item-carrinho">
						<span>exibir nota fiscal</span>
					</div>
					<!-- numero do pedido -->
					<div class="div-teste item-carrinho">
						<span>6153558</span>
					</div>
					<!-- botão de detalhes -->
					<div class="div-teste item-carrinho">
						<a href="pedido.php">mais detalhes</a>
					</div>
				</div>
			</div>
		</div>
			
	</div>
		

	<!-- rodapé -->
	<?php include "footer.php" ?>
</body>
</html>