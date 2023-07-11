<nav class="header navbar d-flex navbar-expand-md justify-content-around esconder-nav w-100">
	
	<!-- div esquerda -->
	<div>
		<!-- logo -->
		<a href="index.php">
		<img href="index.php" src="imagens/logo.png" height="60px"/>
		</a>
	</div>
	
	<!-- div central -->
	<div class="d-flex flex-column h-100">

		<!-- barra de pesquisa -->
		<form style="margin-bottom: 0px; margin-top: 20px;">
		<div class="d-flex justify-content-center">
			<input id="" required type="" name="" placeholder="O que Procura?" class="">
			<div class="botao-pesquisa rounded" onclick="mudarPagina(parseInt(document.getElementById('pagina').value))">
				<p class="centralizar-busca">Buscar</p>
			</div>
		</div>
		</form>

		<!-- navegação -->
		<div class="collapse navbar-collapse" style="margin-top: 0px;">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="index.php" class="nav-link texto-navbar">Produtos</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link texto-navbar">Categorias</a>
				</li>
				<li class="nav-item texto">
					<a href="" class="nav-link texto-navbar">Home</a>
				</li>
				<li class="nav-item texto">
					<a href="https://mexdistribuidora.com/" class="nav-link texto-navbar">Pagina da Empresa</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- div direita -->
	<div class="d-flex justify-content-around div-direita-navbar">
		<!-- botão perfil -->
		<div class="d-flex flex-column justify-content-center">
			<div>
				<a href="perfil.php">
					<span>Perfil</span>
					<i class="fa-solid fa-user"></i>
				</a>
			</div>
		</div>

		<!-- botão carrinho-->
		<div class="d-flex flex-column justify-content-center">
			<a href="carrinho.php">
				<i class="fa-solid fa-cart-shopping"> 4</i>	
			</a>
		</div>
		<!-- botão navbar -->
	    <button class="navbar-toggler" data-toggle="collapse" 
	    data-target="#navegacao">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	</div>
</nav>