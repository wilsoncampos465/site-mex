<?php 
		
	require "conexao.php";
	
	try {
	    $conexao = new PDO($dsn, $usuario, $senha);
	} catch (PDOException $e) {
	    echo 'Erro: ' . $e->getCode() . '<br>Mensagem: <p>' . $e->getMessage() . '</p>';
	    // Trate o erro de conexão conforme necessário
	}

	// Consultar a estrutura da tabela
	$consulta = "DESCRIBE categorias";
	$resultado = $conexao->query($consulta);

	$categorias = array();

	while ($coluna = $resultado->fetch(PDO::FETCH_ASSOC)) {
	    $categorias[] = $coluna['Field'];	    
	}		
	
	echo json_encode($categorias);
?>