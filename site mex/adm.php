<html lang="pt-br">
<head>
	<title>adm</title>
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
	<!-- vai para a pagina de categorias onde se pode fazer as operações que envolvem as categorias -->
	
	<a href="categorias.php">
		<h2>categorias</h2>
	</a>

	<!-- vai para a pagina de produto onde se pode fazer as operações que envolvem os produtos -->
	<a href="adm-produtos.php">
		<h2>produto</h2>
	</a>
	
	<!-- restringir isso para desenvolvedor -->
	<a href="">
		<h2>adicionar adm</h2>
	</a>
	<!-- leva a uma pagina onde pode ver, editar, adicionar ou remover cupom -->
	
	<a href="">
		<h2>cupom</h2>
	</a>

	<a href="">
		<h2>promoção</h2>
	</a>
	<a href="">
		<h2>estatisticas</h2>
	</a>

	<!-- rodapé -->
	<?php require "footer.php" ?>
</body>
</html>