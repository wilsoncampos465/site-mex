<html lang="pt-br">
<head>
	<title>Carrinho</title>
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
	<!-- conteudo do carrinho -->
	<div class="carrinho d-flex  justify-content-center">
		<!-- etapa de compra (nav-bar horizontal) -->
		<div class="d-flex flex-column">
			<span class="titulo">Endereço</span>
			<div class=" div-resumo">
				<span>CEP</span>
				<br>
				<input id="" required type="" name="" placeholder="CEP" class="">
				<br>
				<span>Estado</span>
				<br>
				<input id="" required type="" name="" placeholder="Estado" class="">
				<br>
				<span>Cidade</span>
				<br>
				<input id="" required type="" name="" placeholder="Cidade" class="">
				<br>
				<span>Bairro</span>
				<br>
				<input id="" required type="" name="" placeholder="Bairro" class="">
				<br>
				<span>Rua</span>
				<br>
				<input id="" required type="" name="" placeholder="Rua" class="">
			</div>
		</div>
		<!-- itens -->
		<div class="coluna-itens d-flex flex-column">
			<span class="titulo" style="margin-left: 20px;">Produtos</span>
			<div class="d-flex justify-content-around  linha-carrinho">
				<!-- imagem -->
				<div class=" item-carrinho">
					<img style="height: 100px;" src="imagens/produtos/img1.png">
				</div>
				<!-- nome -->
				<div class=" item-carrinho">
					<a href="">nome do produto</a>
				</div>
				<!-- quantidade -->
				<div class=" item-carrinho">
					<div>
						<i class="fa-solid fa-minus"></i>
						<input type = "number" name = "quantidade" min = "0" max = "500000">
						<i class="fa-solid fa-plus"></i>
					</div>
				</div>
				<!-- preço -->
				<div class=" item-carrinho">
					<span> R$ 123456</span>
				</div>
				<!-- excluir -->
				<div class=" item-carrinho">
					<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="d-flex justify-content-around  linha-carrinho">
				<!-- imagem -->
				<div class=" item-carrinho">
					<img style="height: 100px;" src="imagens/produtos/img1.png">
				</div>
				<!-- nome -->
				<div class=" item-carrinho">
					<a href="">nome do produto</a>
				</div>
				<!-- quantidade -->
				<div class=" item-carrinho">
					<div>
						<i class="fa-solid fa-minus"></i>
						<input type = "number" name = "quantidade" min = "0" max = "500000">
						<i class="fa-solid fa-plus"></i>
					</div>
				</div>
				<!-- preço -->
				<div class=" item-carrinho">
					<span> R$ 123456</span>
				</div>
				<!-- excluir -->
				<div class=" item-carrinho">
					<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="d-flex justify-content-around  linha-carrinho">
				<!-- imagem -->
				<div class=" item-carrinho">
					<img style="height: 100px;" src="imagens/produtos/img1.png">
				</div>
				<!-- nome -->
				<div class=" item-carrinho">
					<a href="">nome do produto</a>
				</div>
				<!-- quantidade -->
				<div class=" item-carrinho">
					<div>
						<i class="fa-solid fa-minus"></i>
						<input type = "number" name = "quantidade" min = "0" max = "500000">
						<i class="fa-solid fa-plus"></i>
					</div>
				</div>
				<!-- preço -->
				<div class=" item-carrinho">
					<span> R$ 123456</span>
				</div>
				<!-- excluir -->
				<div class=" item-carrinho">
					<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="d-flex justify-content-around  linha-carrinho">
				<!-- imagem -->
				<div class=" item-carrinho">
					<img style="height: 100px;" src="imagens/produtos/img1.png">
				</div>
				<!-- nome -->
				<div class=" item-carrinho">
					<a href="">nome do produto</a>
				</div>
				<!-- quantidade -->
				<div class=" item-carrinho">
					<div>
						<i class="fa-solid fa-minus"></i>
						<input type = "number" name = "quantidade" min = "0" max = "500000">
						<i class="fa-solid fa-plus"></i>
					</div>
				</div>
				<!-- preço -->
				<div class=" item-carrinho">
					<span> R$ 123456</span>
				</div>
				<!-- excluir -->
				<div class=" item-carrinho">
					<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
		</div>
		<!-- Resumo -->
		<div class=" d-flex flex-column">
			<span class="titulo">Resumo</span>
			<div class="d-flex flex-column  justify-content-around div-resumo">
				
				<!-- custos -->
				<div class="d-flex flex-column justify-content-start">
					<table class="table table-borderless carrinho-custos">
						<tr>
							<td>
								Total
							</td>
							<td>
								123456
							</td>
						</tr>
						<tr>
							<td>
								Desconto
							</td>
							<td>
								123456
							</td>
						</tr>
						<tr>
							<td>
								entrega
							</td>
							<td>
								123456
							</td>
						</tr>
						<tr>
							<td>
								Total Final
							</td>
							<td>
								123456
							</td>
						</tr>
					</table>
				</div>
				<!-- cupom -->
				<div class="d-flex cupom">
					
					<input id="" required type="" name="" placeholder="Cupom" class="">
					<div class="botao-pesquisa rounded" onclick="mudarPagina(parseInt(document.getElementById('pagina').value))">
						<p class="centralizar-comprar">Aplicar</p>
					</div>
				</div>
				<!-- botão de compra-->
				<div class=" ">
					<div class="botao-comprar-carrinho rounded" onclick="mudarPagina(parseInt(document.getElementById('pagina').value))">
					<p class="centralizar-comprar">Comprar</p>
					</div>
				</div>	
			</div>
		</div>
		
	</div>
	<!-- rodapé -->
	<?php include "footer.php" ?>
</body>
</html>