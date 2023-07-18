<?php
	
	print_r($_REQUEST);
	echo "<br>";
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$data = $_POST['data'];

	if(isset($_POST['email'])){
		echo "sucesso";
		echo $_POST['email'];
	}
	else{
		echo "erro";
		// header("location: cadastro.php")
	}

?>