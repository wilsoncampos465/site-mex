<html lang="pt-br">
<head>
	<title>Meus dados</title>
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
	<!-- atualizar dados -->
	<div class="d-flex flex-column">
		<!-- foto -->
		<h2>upload de imagem</h2>
		<form method="post" enctype="multipart/form-data" action=".php">
			<p>Selecione uma imagem:</p> 
			<input name="arquivo[]" multiple required type="file">
			<br>
			<!-- categorias -->
			<p>escolher categorias:</p>
			<input type="checkbox" id="" required name="categoria1" value="">
			<label for="categoria1">categoria1</label>
			<br>
			<input type="checkbox" id="" required name="categoria2" value="">
			<label for="categoria2">categoria2</label>
			<br>
			<input type="checkbox" id="" required name="categoria3" value="">
			<label for="categoria3">categoria3</label>
			<br><br>

			<!-- nome -->
			<label for="nome">nome do produto</label>
			<br>
			<input type="" required placeholder="" name="nome">
			<br>
			<!-- preço -->
			<label for="preco">preço</label>
			<br>
			<input type="number" required placeholder="" name="preco">
			<br>
			<!-- quantidade -->
			<label for="estoque">quantidade no estoque</label>
			<br>
			<input type="number" required placeholder="" name="estoque">
			<br>
			<!-- codigo -->
			<label for="codigo">codigo phixa (opcional)</label>
			<br>
			<input type="" placeholder="" name="codigo">
			<br>
			<!-- unidade -->
			<label for="unidade">unidade de venda (opcional)</label>
			<br>
			<input type="number" placeholder="" name="unidade">
			<br>
			<!-- criar categoria nova -->
			<label for="">criar categoria (opcional)</label>
			<br>
			<input type="" placeholder="" name="">
			<br>
			<!-- custo -->
			<label for="custo">custo de compra (opcional)</label>
			<br>
			<input type="number" placeholder="" name="custo">
			<br>
			<input type="submit" value="enviar">
		</form>
		


	</div>
		
	<!-- rodapé -->
	<?php require "footer.php" ?>
</body>
</html>