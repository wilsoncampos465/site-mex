<div class="conteudo div-teste d-flex flex-column">
	<div class="div-teste div-produto d-flex justify-content-around">
		<!-- esquerda -->
		<div class="div-teste d-flex flex-column div-passar-fotos">
			<!-- foto -->
			<div class="div-foto-produto div-teste">
				<img src="imagens/produtos/img1.png" class="foto-produto">	
			</div>
			<!-- barra de fotos -->
			<div>
				<img src="imagens/produtos/img1.png" class="div-teste miniatura">
				<img src="imagens/produtos/img1.png" class="div-teste miniatura">
				<img src="imagens/produtos/img1.png" class="div-teste miniatura">
				<img src="imagens/produtos/img1.png" class="div-teste miniatura">
				<img src="imagens/produtos/img1.png" class="div-teste miniatura">
				<img src="imagens/produtos/img1.png" class="div-teste miniatura">
				<img src="imagens/produtos/img1.png" class="div-teste miniatura">
			</div>
		</div>


		<!-- meio -->
		<div>
			<div>
				<!-- nome do produto -->
				<div class="titulo-produto div-teste">
					<span class="titulo">Sabonete</span>	
				</div>
			</div>
			<div class="div-teste d-flex flex-column div-informacoes justify-content-around">
				<!-- preço -->
				<div class="div-teste div-preco">
					<span class="texto-preco">R$99,99</span>
				</div>

				<!-- estoque -->
				<div>
					<span>32 disponiveis</span>
					<br>
					<!-- quantidade -->
					<i class="fa-solid fa-minus"></i>
					<input type = "number" name = "quantidade" min = "0" max = "500000">
					<i class="fa-solid fa-plus"></i>
				</div>

				<!-- frete -->
				<div>
					<span>calcule o frete:</span>
					<br>
					<div class="d-flex">
						<input type="" placeholder="CEP" name="frete">
						<div class="botao-salvar div-botao rounded" onclick="mudarPagina(parseInt(document.getElementById('pagina').value))">
							<p class="centralizar-texto-botao">Salvar</p>
						</div>	
					</div>
					<p>
						R$20,00
						<br>
						chegará em 7 dias, via correios
					</p>
				</div>

				<div class="div-teste d-flex flex-column">					
					<div class="d-flex justify-content-around">
						<!-- botão carrinho -->
						<div class="botao-produto">
							<span class="centralizar-texto-botao">Carrinho</span>
						</div>
						<!-- botão comprar agora -->
						<div class="botao-produto">
							<span class="centralizar-texto-botao">Comprar</span>
						</div>	
					</div>
				</div>
			</div>	
		</div>
	</div>

	<div class="div-teste div-descricao">
		<!-- descrição -->
		<div>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
	</div>
</div>