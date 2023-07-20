<?php

	echo '<a href = cadastro.php>voltar</a><br><br><br>';

	$nome = $_POST['nome'];
	$senhaUser = $_POST['senha'];
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

	require "conexao.php";

	try{
		$conexao = new PDO($dsn, $usuario, $senha);

		$query = '
 		insert into cadastros(nome, senha, email, CPF, telefone, CEP, rua, numero, complemento, estado, cidade, bairro, nascimento) values("'. $nome .'" , "'. $senhaUser .'", "'. $email .'", "'. $cpf .'", "'. $telefone .'", "'. $cep .'", "'. $rua .'", "'. $numero .'", "'. $complemento .'", "'. $estado .'", "'. $cidade .'", "'. $bairro .'",'. $data .');';
		$stmt = $conexao->prepare($query);
    	$stmt->execute();
        header("location: index.php");
	}catch(PDOException $e){
		echo 'Erro: '.$e->getCode().'<br>Mensagem: <p>' .$e->getMessage().'</p><br><br>Falha ao adicionar cadastro';
	}
?>