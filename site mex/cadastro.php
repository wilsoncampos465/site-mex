<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "icon" href = "imagens/icone-aba.png"/>
	<link rel = "stylesheet" href = "bootstrap.css">
	<link rel = "stylesheet" href = "estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</head>
<body id="body">
	<!-- barra de navegação -->
	<?php require "nav-bar.php" ?>
	
	<!-- cadastro -->
	<div class="div-teste cadastro">
		<span class="titulo-login">Cadastrar-se</span>
		<div>
			<div id="form-dados">
				<form action="inserir-cadastro.php" method="post" class="d-flex flex-column justify-content-between form-cadastro">
					<div class="d-flex flex-column justify-content-between form-dados">
						<div class="d-flex justify-content-around">
							<!-- nome completo -->
							<input class="input-duplo" required type="text" placeholder="Nome completo" name="nome">
							
							<!-- cpf -->
							<input class="input-duplo" required type="text" placeholder="CPF" name="cpf" pattern="[0-9]{11}">	
						</div>

						<div class="d-flex justify-content-around">
							<!-- telefone -->
							<input class="input-duplo" required type="tel" placeholder="Telefone" name="telefone">
							
							<!-- data de nascimento -->
							<input class="input-duplo" required type="date" placeholder="Data de nascimento" name="data">
						</div>
						
						<!-- email -->
						<input class="input-longo" required type="email" placeholder="E-mail" name="email">
						
						<!-- senha -->
						<div class="d-flex justify-content-around">
							<input class="input-duplo" required type="password" placeholder="Senha" name="senha">
							<input class="input-duplo" required type="password" placeholder="Confirme a senha" name="senha-confirmada">
						</div>	
					</div>
					<!-- <input class="botao-entrar div-botao rounded" type="submit" name="submit" value="Continuar"> -->
					<div class="botao-entrar div-botao rounded" onclick="ocultarDiv()">
						<p class="centralizar-texto-botao">Continuar</p>
					</div>
				<!-- </form>	 -->
			</div>
			<!-- endereço -->
			<div id="form-endereco" hidden>
				<!-- <form class="d-flex flex-column justify-content-between form-cadastro" action="inserir-cadastro.php"> -->
					
					<div class="d-flex flex-column justify-content-between form-endereco">
						<!-- CEP -->
						<input class="input-duplo" required style="margin-left: 15px;" type="text" maxlength="9" id="cep" placeholder="CEP" name="cep" pattern="[0-9]{8}">
				
						<!-- Rua -->
						<input class="input-longo" required type="text" placeholder="Rua" id="rua" name="rua">
						<div class="d-flex justify-content-around">
							<!-- numero -->
							<input class="input-duplo" required type="text" placeholder="Número" name="numero">
							
							<!-- complemento -->
							<input class="input-duplo" required type="text" placeholder="Complemento" name="complemento">
						</div>
						<div class="d-flex justify-content-between div-endereco" style="width:530px">
							<!-- estado -->
							<select  id="estado" class="input-estado" required placeholder="UF" name="estado">
								<option value="">UF</option>
							  	<option value="AC">AC</option>
							  	<option value="AL">AL</option>
							  	<option value="AP">AP</option>
							  	<option value="AM">AM</option>
							  	<option value="BA">BA</option>
							  	<option value="CE">CE</option>
							  	<option value="DF">DF</option>
							  	<option value="ES">ES</option>
							  	<option value="GO">GO</option>
							  	<option value="MA">MA</option>
							  	<option value="MT">MT</option>
							  	<option value="MS">MS</option>
							  	<option value="MG">MG</option>
							  	<option value="PA">PA</option>
							  	<option value="PB">PB</option>
							  	<option value="PR">PR</option>
							  	<option value="PE">PE</option>
							  	<option value="PI">PI</option>
							  	<option value="RJ">RJ</option>
							  	<option value="RN">RN</option>
							  	<option value="RS">RS</option>
							  	<option value="RO">RO</option>
							  	<option value="RR">RR</option>
							  	<option value="SC">SC</option>
							  	<option value="SP">SP</option>
							  	<option value="SE">SE</option>
							  	<option value="TO">TO</option>
							</select>
							<!-- Cidade -->
							<input class="input-cidade" id="cidade" required type="text" placeholder="Ciedade" name="cidade">
							<!-- bairro -->
							<input class="input-cidade" id="bairro" required type="text" placeholder="Bairro" name="bairro">
						</div>
						
					</div>
					
					<div class="botao-entrar div-botao rounded" onclick="ocultarDiv()">
						<p class="centralizar-texto-botao">Voltar</p>
					</div>
					<input class="botao-entrar div-botao rounded" type="submit" value="Cadastrar">
				</form>	
			</div>
		
		</div>
		
	</div>


	</div>

	<!-- rodapé -->
	<?php require "footer.php" ?>
</body>
</html>
<script>

	//completa o endereço ao preencher o CEP
	$("#cep").blur(function(){
		var cep = this.value.replace(/[^0-9]/, "");
		if(cep.length != 8){
			return false;
		}
		var url = "https://viacep.com.br/ws/"+cep+"/json/";

		$.getJSON(url, function(dadosRetorno){
			try{
				$("#rua").val(dadosRetorno.logradouro);
				$("#bairro").val(dadosRetorno.bairro);
				$("#cidade").val(dadosRetorno.localidade);
				$("#estado").val(dadosRetorno.uf);
			}catch(ex){}
		});
	});

	function ocultarDiv(){
		var formDados = document.getElementById('form-dados');
		var formEndereco = document.getElementById('form-endereco');
		if (formDados.hasAttribute("hidden")) {
			formDados.removeAttribute("hidden");
			formEndereco.setAttribute("hidden", true);
		} else {
			formDados.setAttribute("hidden", true);
			formEndereco.removeAttribute("hidden");
		}
	}
</script>