<?php 
		
	// require "conexao.php";
	
	// try {
	//     $conexao = new PDO($dsn, $usuario, $senha);
	// } catch (PDOException $e) {
	//     echo 'Erro: ' . $e->getCode() . '<br>Mensagem: <p>' . $e->getMessage() . '</p>';
	//     // Trate o erro de conexão conforme necessário
	// }

	// // Consultar a estrutura da tabela
	// $consulta = "DESCRIBE categorias";
	// $resultado = $conexao->query($consulta);

	// $categorias = array();

	// while ($coluna = $resultado->fetch(PDO::FETCH_ASSOC)) {
	//     $categorias[] = $coluna['Field'];	    
	// }		
	
	// echo json_encode($categorias);
?>

<?php 
		
	require "conexao.php";
	
	try {
	    $conexao = new PDO($dsn, $usuario, $senha);
	} catch (PDOException $e) {
	    echo 'Erro: ' . $e->getCode() . '<br>Mensagem: <p>' . $e->getMessage() . '</p>';
	    // Trate o erro de conexão conforme necessário
	}

	// Array para armazenar os resultados da consulta
	$categoria = array();
	$categoriaPai = array();

	try {
	    $query = "SELECT categoria, categoria_pai FROM subcategorias";
	    $stmt = $conexao->prepare($query);
	    $stmt->execute();
	    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    // Iterar pelos resultados e armazenar na matriz $resultados
	    foreach ($dados as $row) {
	        $resultados[] = array(
	            "categoria" => $row['categoria'],
	            "categoria_pai" => $row['categoria_pai']
	        );
	    }
	} catch (PDOException $e) {
	    echo "Erro: " . $e->getMessage();
	}		
	
	echo json_encode($resultados);

?>
