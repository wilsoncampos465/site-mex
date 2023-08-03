<?php 
		
	require "conexao.php";
	
	try {
	    $conexao = new PDO($dsn, $usuario, $senha);
	} catch (PDOException $e) {
	    echo 'Erro: ' . $e->getCode() . '<br>Mensagem: <p>' . $e->getMessage() . '</p>';
	    // Trate o erro de conexão conforme necessário
	}

	try {
	    $query = "SELECT nome FROM produtos";
	    $stmt = $conexao->prepare($query);
	    $stmt->execute();
	    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);


	} catch (PDOException $e) {
	    echo "Erro: " . $e->getMessage();
	}		
	
	echo json_encode($produtos);
?>
