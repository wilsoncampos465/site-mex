<html lang="pt-br">
<head>
	<title>home</title>
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
	
	<!-- criar categoria -->
	<div>
		<h4>criar categoria:</h4>

		<form action="criar-categoria.php" method="post">

			<input type="radio" name="tipo-categoria" value="0">
			<label for="tipo-categoria">sem herança</label>
			<br>
			<input type="radio" name="tipo-categoria" value="1">
			<label for="tipo-categoria">subcategoria</label>
			<br>
			<input type="text" name="nome_categoria" placeholder="nome da categoria">
			<br>
			<span>-------so mostrar se clicar na opção que precisa------</span>
			<br>
			<span>selecionar categoria pai (subcategoria):</span>
			<br>
			<select name="pai">
				<option value=""></option>
			</select>
			<br>
			<input type="submit" value="criar">
		</form>
	</div>
	<!-- fazer categoria existente virar subcategoria -->
	<div>
		<h4>fazer categoria existente virar subcategoria:</h4>
		<form action=".php" method="post">
			<input type="text" name="categoria" placeholder ="nome da categoria">
			<br>
			<span>selecionar categoria pai:</span>
			<br>
			<select>
				<option></option>
			</select>
			<br>
			<input type="submit" value="editar">
		</form>
	</div>
	<!-- excluir categoria -->
	<div>
		<h4>excluir categoria:</h4>
		<form action=".php" method="post">
			<span>selecionar categoria:</span>
			<br>
			<select>
				<option></option>
			</select>
			<br>
			<input type="submit" value="excluir">
		</form>
	</div>
	<!-- opção que seleciona uma categoria e mostra uma checkbox com todos os produtos existentes para selecionar quais serão selecionados nesta categoria -->
	<div>
		<h4>incluir produto em categoria</h4>
		<form action=".php" method="post">
			<span>selecionar categoria:</span>
			<br>
			<select>
				<option></option>
			</select>
			<br>
			<span>-------mostrar todos os produtos em checkbox-------</span>
			<br>
			<input type="submit" value="incluir">
		</form>
	</div>







	<!-- rodapé -->
	<?php require "footer.php" ?>
</body>
</html>