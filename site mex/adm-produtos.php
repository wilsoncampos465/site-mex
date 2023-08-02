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
		<a href="novo-produto.php">
			<h4>adicionar produto:</h4>
		</a>
	</div>

	<!-- editar categoria -->
	<div>
		<a href="editar-produto.php">
			<h4>editar produto:</h4>	
		</a>
		<!-- <form action="editar-categoria.php" method="post">
			<span>categoria a ser editada:</span>
			<br>
			<select class="categoria-select" name="categoria-para-editar">
				<option value=""></option>
			</select>
			<br>

			<span>novo nome da categoria:</span>
			<br>
			<input type="text" name="novo-nome">
			<br>

			<span>subcategoria de:</span>
			<br>
			<select class="categoria-select" name="categoria-pai">
				<option value=""></option>
			</select>
			<br>
			<input type="submit" value="editar">
		</form> -->
	</div>
	<!-- excluir categoria -->
	<div>
		<h4>excluir produto:</h4>
		<!-- <form action="excluir-categoria.php" method="post">
			<span>selecionar categoria:</span>
			<br>
			<select class="categoria-select" name="categoria-para-excluir">
				<option value=""></option>
			</select>
			<br>
			<input type="submit" value="excluir">
		</form> -->
	</div>
	<!-- opção que seleciona uma categoria e mostra uma checkbox com todos os produtos existentes para selecionar quais serão selecionados nesta categoria -->
	<div>
		<h4>incluir categoria em produto</h4>
		<!-- <form action=".php" method="post">
			<span>selecionar categoria:</span>
			<br>
			<select class="categoria-select" name="categoria-pai">
				<option value=""></option>
			</select>
			<br>
			<span>-------mostrar todos os produtos em checkbox-------</span>
			<br>
			<input type="submit" value="incluir">
		</form> -->
	</div>



	<!-- rodapé -->
	<?php require "footer.php" ?>
</body>
</html>

<script type="text/javascript">
	function carregarCategorias() {
	    var xmlhttp = new XMLHttpRequest();

	    xmlhttp.onreadystatechange = function() {
	    	console.log(xmlhttp);
	        if (this.readyState === 4 && this.status === 200) {
	            

	            var response = JSON.parse(this.responseText);
	            var categorias = response.categorias;
	            var categoriasPai = response.categoriasPai;
	            console.log(categorias);
	            console.log(categoriasPai);

	            var selectCategorias = document.getElementsByClassName("categoria-select");

	            // Para cada <select> com a classe "categoria-select"
	            for (var i = 0; i < selectCategorias.length; i++) {
	                var selectCategoria = selectCategorias[i];

	                // Limpar as opções existentes
	                selectCategoria.innerHTML = '<option value="0">Selecione uma categoria existente</option>';

	                // Adicionar as opções das categorias existentes
	                categorias.forEach(function(categoria) {
	                    var option = document.createElement("option");
	                    option.value = categoria;
	                    option.text = categoria;
	                    selectCategoria.appendChild(option);
	                });
	            }
	        }
	    };

	    // Fazer a requisição ao servidor para obter as categorias existentes
	    xmlhttp.open("GET", "nomes-categorias.php", true);
	    xmlhttp.send();
	}
/*
["teste1","teste3","teste5","teste6","teste7","teste8"]
["categoria_principal","categoria_principal","teste1","teste1","categoria_principal","teste6"]


*/
// Carregar as categorias ao carregar a página
carregarCategorias();
</script>