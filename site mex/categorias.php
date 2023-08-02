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

			<input type="radio" required name="tipo-categoria" value="0">
			<label for="tipo-categoria">sem herança</label>
			<br>
			<input type="radio" required name="tipo-categoria" value="1">
			<label for="tipo-categoria">subcategoria</label>
			<br>
			<input type="text" name="nome_categoria" placeholder="nome da categoria">
			<br>
			<span>-------so mostrar se clicar na opção que precisa------</span>
			<br>
			<span>selecionar categoria pai (subcategoria):</span>
			<br>
			<!-- <select class="categoria-select" name="categoria-pai">
				<option value=""></option>
			</select> -->
			<ul id="listaCategorias">
		    	<!-- A lista de categorias será criada dinamicamente aqui -->
		    </ul>
			<br>
			<input type="submit" value="criar">
		</form>
	</div>

	<!-- editar categoria -->
	<div>
		<h4>editar categoria:</h4>
		<form action="editar-categoria.php" method="post">
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
		</form>
	</div>
	<!-- excluir categoria -->
	<div>
		<h4>excluir categoria:</h4>
		<form action="excluir-categoria.php" method="post">
			<span>selecionar categoria:</span>
			<br>
			<select class="categoria-select" name="categoria-para-excluir">
				<option value=""></option>
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
			<select class="categoria-select" name="categoria-pai">
				<option value=""></option>
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

<script type="text/javascript">
// 	function carregarCategorias() {
// 	    var xmlhttp = new XMLHttpRequest();
// 	    xmlhttp.onreadystatechange = function() {
// 	        if (this.readyState === 4 && this.status === 200) {
// 	            var categorias = JSON.parse(this.responseText);
// 	            var selectCategorias = document.getElementsByClassName("categoria-select");

// 	            // Para cada <select> com a classe "categoria-select"
// 	            for (var i = 0; i < selectCategorias.length; i++) {
// 	                var selectCategoria = selectCategorias[i];

// 	                // Limpar as opções existentes
// 	                selectCategoria.innerHTML = '<option value="0">Selecione uma categoria existente</option>';

// 	                // Adicionar as opções das categorias existentes
// 	                categorias.forEach(function(categoria) {
// 	                    var option = document.createElement("option");
// 	                    option.value = categoria;
// 	                    option.text = categoria;
// 	                    selectCategoria.appendChild(option);
// 	                });
// 	            }
// 	        }
// 	    };

// 	    // Fazer a requisição ao servidor para obter as categorias existentes
// 	    xmlhttp.open("GET", "nomes-categorias.php", true);
// 	    xmlhttp.send();
// 	}

// 	// function mostrarCampoNovaCategoria(selectElement) {
// 	// 	var campoNovaCategoria = document.getElementById("campo-nova-categoria");

// 	// 	if (selectElement.value === "novo") {
// 	// 	campoNovaCategoria.style.display = "block";
// 	// 	} else {
// 	// 	campoNovaCategoria.style.display = "none";
// 	// 	}
// 	// }

// // Carregar as categorias ao carregar a página
// carregarCategorias();

//--------------------------------------------------
// Função para criar a lista de subcategorias recursivamente
    function criarListaSubcategorias(subcategorias, lista) {
    	console.log(subcategorias);
      subcategorias.forEach(function (subcategoria) {
        var liSubcategoria = document.createElement("li");
        var checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.name = "categorias[]";
        checkbox.value = subcategoria.categoria;
        liSubcategoria.appendChild(checkbox);
        liSubcategoria.appendChild(document.createTextNode(subcategoria.categoria));

        // Se a subcategoria tiver subcategorias, criar uma lista aninhada para elas
        if (subcategoria.subcategorias && subcategoria.subcategorias.length > 0) {
          var ulSubcategorias = document.createElement("ul");
          criarListaSubcategorias(subcategoria.subcategorias, ulSubcategorias);
          liSubcategoria.appendChild(ulSubcategorias);
        }

        lista.appendChild(liSubcategoria);
      });
    }

    // Função para carregar as categorias via XMLHttpRequest e criar a lista de checkboxes
    function carregarCategorias() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
          var categorias = JSON.parse(this.responseText);
          var listaCategorias = document.getElementById("listaCategorias");

          // Criar a lista de categorias principais
          categorias.forEach(function (categoria) {
            if (categoria.categoria_pai != "categoria_principal") {
            	console.log("4");
              var liCategoria = document.createElement("li");
              var checkbox = document.createElement("input");
              checkbox.type = "checkbox";
              checkbox.name = "categorias[]";
              checkbox.value = categoria.categoria;
              liCategoria.appendChild(checkbox);
              liCategoria.appendChild(document.createTextNode(categoria.categoria));
              // Filtrar subcategorias pertencentes à categoria atual
              var subcategorias = categorias.filter(function (subcategoria) {
                return subcategoria.categoria_pai === categoria.categoria;
              });
              // Se a categoria tiver subcategorias, criar uma lista aninhada para elas
              if (subcategorias.length > 0) {
                var ulSubcategorias = document.createElement("ul");
                console.log(subcategorias);
                criarListaSubcategorias(subcategorias, ulSubcategorias);
                liCategoria.appendChild(ulSubcategorias);
              }
              listaCategorias.appendChild(liCategoria);
            }
          });
        }
      };

      // Fazer a requisição ao servidor para obter as categorias existentes
      xmlhttp.open("GET", "nomes-categorias.php", true);
      xmlhttp.send();
    }

    // Chamar a função para carregar as categorias e criar a lista de checkboxes
    carregarCategorias();
</script>