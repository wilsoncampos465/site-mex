<html lang="pt-br">
<head>
	<title>Novo Produto</title>
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
		<span>escolher produto:</span>
		<!-- select dos produtos -->
		<select class="produtos-select" name="produto-para-editar">
			<option value=""></option>
		</select>
		<form method="post" enctype="multipart/form-data" action="adicionar-produto.php" enctype="multipart/form-data">
			<!-- foto -->
			<p>adicionar imagens:</p> 
			<input name="arquivos[]" multiple type="file">
			<br>
			<!-- categorias -->
			<p>escolher categorias:----------------------------- mostrar todas as categorias e deixar selecionada as que o produto se enquadra</p>
			

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
			<!-- descrição -->
			<label for="descricao">descrição</label>
			<br>
			<textarea name="descricao" rows="4" cols="50"></textarea>
			<br>
			<!-- quantidade -->
			<label for="estoque">quantidade no estoque</label>
			<br>
			<input type="number" required placeholder="" name="estoque">
			<br>
			<!-- codigo -->
			<label for="codigo">codigo produto (phixa)</label>
			<br>
			<input type="" placeholder="" required name="codigo">
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
			<input type="submit" value="Adicionar Produto">
		</form>
		


	</div>
		
	<!-- rodapé -->
	<?php require "footer.php" ?>
</body>
</html>
<script type="text/javascript">
	function carregarProdutos() {
	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (this.readyState === 4 && this.status === 200) {
	            var produtos = JSON.parse(this.responseText);
	            var selectProdutos = document.getElementsByClassName("produtos-select");

	            // Para cada <select> com a classe "categoria-select"
	            for (var i = 0; i < selectProdutos.length; i++) {
	                var selectProduto = selectProdutos[i];

	                // Limpar as opções existentes
	                selectProduto.innerHTML = '<option value="0">Selecione um produto existente</option>';

	                // Adicionar as opções das categorias existentes
	                produtos.forEach(function(produto) {
	                	// Verifica se o nome da categoria possui espaço em branco
	                	var nome_com_espaco = produto.nome;
						// if (produto.nome.indexOf('_') !== -1) {
						// 	// Substitui os espaços por underscores
						// 	nome_com_espaco = produto.nome.replace( '_', / /g);
						// 	console.log(nome_com_espaco);
						// }
						if (produto.nome.indexOf('_') !== -1) {
							// Substitui todos os "_" por espaços em branco
							nome_com_espaco = produto.nome.replace(/_/g, " ");
						}
	                    var option = document.createElement("option");

	                    option.value = produto.nome;
	                    option.text = nome_com_espaco;
	                    selectProduto.appendChild(option);
	                });
	            }
	        }
	    };

	    // Fazer a requisição ao servidor para obter as categorias existentes
	    xmlhttp.open("GET", "nomes-produtos.php", true);
	    xmlhttp.send();
	}
	carregarProdutos()
</script>