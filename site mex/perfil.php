<html lang="pt-br">
<head>
	<title>Perfil</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "icon" href = "imagens/iconeAba.png"/>
	<link rel = "stylesheet" href = "bootstrap.css">
	<link rel = "stylesheet" href = "estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body id="body">
	<!-- barra de navegação -->
	<?php require "nav-bar.php" ?>
	<!-- perfil -->
	<div class="d-flex w-100 div-teste">
		<div class="opcoes div-teste d-flex flex-column">
			<!-- mudar senha -->
			<a href="mudar-senha.php">mudar senha</a>
			<!-- dados -->
			<a href="atualizar-dados.php">atualizar dados</a>
		</div>
		<div>
				<!-- historico -->
				<span>Pedidos</span>
				<table class="table">
					<thead>
				    	<tr>
				    		<th scope="col">Data</th>
				    		<th scope="col">Total</th>
				      		<th scope="col">Número do Pedido</th>
				      		<th scope="col">Nota Fiscal</th>
				      		<th scope="col">Detalhes</th>
				    	</tr>
				  	</thead>
					<tbody>
					    <tr>
					      	<td>01/01/2020</td>
					      	<td>R$123456,00</td>
					      	<td>132456</td>
					      	<td><a>Nota Fiscal</a></td>
					      	<td>Mais detalhes</td>
					    </tr>
					    <tr>
					      	<td>01/01/2020</td>
					      	<td>R$123456,00</td>
					      	<td>132456</td>
					      	<td><a>Nota Fiscal</a></td>
					      	<td>Mais detalhes</td>
					    </tr>
				    	<tr>
					      	<td>01/01/2020</td>
					      	<td>R$123456,00</td>
					      	<td>132456</td>
					      	<td><a>Nota Fiscal</a></td>
					      	<td>Mais detalhes</td>
				    	</tr>
				  	</tbody>
				</table>
					
		</div>
			
	</div>
		

	<!-- rodapé -->
	<?php include "footer.php" ?>
</body>
</html>