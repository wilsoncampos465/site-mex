<?php

	echo '<a href = login.php>voltar</a><br><br><br>';

	$nome = $_POST['user'];
	$senhaUser = $_POST['senha'];

	require "conexao.php";

	try{
		$conexao = new PDO($dsn, $usuario, $senha);

		//procura no banco de dados pelo nome do loin e comparar a senha do banco de dados com a senha do login
		
		// Consulta SQL
		$query = "SELECT COUNT(*) AS total_registros
		        FROM cadastros
		        WHERE (email = :usuario OR cpf = :usuario) AND senha = :senha";

		// Preparar a consulta
		$stmt = $conexao->prepare($query);

		// Substituir os parâmetros pelos valores fornecidos
		$stmt->bindParam(':usuario', $nome);
		$stmt->bindParam(':senha', $senhaUser);

		// Executar a consulta
		$stmt->execute();

		// Obter o resultado
		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

		// Verificar o total de registros
		$totalRegistros = $resultado['total_registros'];

		if ($totalRegistros == 0) {
		    // Usuário não encontrado, mostrar mensagem de erro ou redirecionar para página de login
		    echo "<br><br><p>usuario não encontrado</p><br><br>";
		} elseif ($totalRegistros == 1) {
		    // Autenticação bem-sucedida, permitir acesso ao usuário
		    echo "<br><br><p>autenticação bem sucedida</p><br><br>";
		} else {
		    // Mais de um usuário encontrado, mostrar mensagem de erro ou redirecionar para página de login
		    echo "<br><br><p>erro, numero de registros: ".$totalRegistros."</p><br><br>";
		}
		


















		// $query = '
 		// insert into cadastros(nome, senha, email, CPF, telefone, CEP, rua, numero, complemento, estado, cidade, bairro, nascimento) values("'. $nome .'" , "'. $senhaUser .'", "'. $email .'", "'. $cpf .'", "'. $telefone .'", "'. $cep .'", "'. $rua .'", "'. $numero .'", "'. $complemento .'", "'. $estado .'", "'. $cidade .'", "'. $bairro .'",'. $data .');';
		// $stmt = $conexao->prepare($query);
    	// $stmt->execute();
        // header("location: index.php");
	}catch(PDOException $e){
		echo 'Erro: '.$e->getCode().'<br>Mensagem: <p>' .$e->getMessage().'</p><br><br>Falha ao adicionar cadastro';
	}
?>