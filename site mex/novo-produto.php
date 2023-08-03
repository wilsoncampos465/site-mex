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
		<!-- foto -->
		<h2>upload de imagem</h2>
		<form method="post" enctype="multipart/form-data" action="adicionar-produto.php" enctype="multipart/form-data">
			<p>Selecione imagens:</p> 
			<input required name="arquivos[]" multiple type="file">
			<br>
			<!-- categorias -->
			<p>escolher categorias:</p>
			<!-- <select class="categoria-select" name="categoria-para-excluir">
				<option value=""></option>
			</select> -->
			<ul id="listaCategorias">
				
			</ul>
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
	function carregarCategorias() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
          var categorias = JSON.parse(this.responseText);
          var listaCategorias = document.getElementById("listaCategorias");

          // ordena a herarquia das categorias (principal -> secundaria -> terciaria...)
          categorias = ordenarCategorias(categorias);

          categorias.forEach(function (categoria) {
          	// console.log(categoria);
          	//if para fazer a logica das categorias principais
            if (categoria.categoria_pai == "categoria_principal") {
            	
            	//cria as checkbox das categorias principais
				var liCategoria = document.createElement("li");
				var checkbox = document.createElement("input");
				liCategoria.id = categoria.categoria;
				checkbox.type = "checkbox";
				checkbox.name = "categorias[]";
				checkbox.value = categoria.categoria;
				
				listaCategorias.appendChild(liCategoria);
				liCategoria.appendChild(checkbox);
				liCategoria.appendChild(document.createTextNode(categoria.categoria));
            }
            //logica para categorias secundarias
            else{
            	//cria as checkbox das subcategorias
				var liCategoria = document.createElement("li");
				var ulCategoria = document.createElement("ul");
				var checkbox = document.createElement("input");
				var listaCategoriaPai = document.getElementById(categoria.categoria_pai);
				liCategoria.id = categoria.categoria;
				checkbox.type = "checkbox";
				checkbox.name = "categorias[]";
				checkbox.value = categoria.categoria;
				
				listaCategoriaPai.appendChild(ulCategoria);
				ulCategoria.appendChild(liCategoria);
				liCategoria.appendChild(checkbox);
				liCategoria.appendChild(document.createTextNode(categoria.categoria));
    		}
          });
        }
      };

      // Fazer a requisição ao servidor para obter as categorias existentes
      xmlhttp.open("GET", "nomes-subcategorias.php", true);
      xmlhttp.send();
    }

    // Função para ordenar as categorias em ordem de hierarquia
	function ordenarCategorias(categorias) {
		var categoriasOrdenadas = [];

		//sai do while quando todas as categorias forem ordenadas
		while(categoriasOrdenadas.length != categorias.length){
			categorias.forEach(function(categoria) {
				//verifica se a categoria ja esta inclusa no array
				if(categoriasOrdenadas.indexOf(categoria) == -1){
					//adiciona primeiro as categorias principais na lista de categorias ordenadas
					if (categoria.categoria_pai == "categoria_principal"){
						//adiciona a categoria no final do array
						categoriasOrdenadas.push(categoria);
					}
					//verifica se a categoria pai ja foi ordenada
					var categoriaPaiOrdenada = categoriasOrdenadas.some(function(cat){
							return cat.categoria == categoria.categoria_pai;
						});
					//adiciona a categoria caso a categoria pai ja tenha sido ordenada
					if(categoriaPaiOrdenada){
						categoriasOrdenadas.push(categoria);
					}
				}
				
			});
		}
		return categoriasOrdenadas;	
	}
	carregarCategorias();
</script>