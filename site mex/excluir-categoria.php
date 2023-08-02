<?php 

	
	$nomeCategoria = $_POST['categoria-para-excluir'];

	require "conexao.php";

	try {
	    $conexao = new PDO($dsn, $usuario, $senha);
	} catch (PDOException $e) {
	    echo 'Erro: ' . $e->getCode() . '<br>Mensagem: <p>' . $e->getMessage() . '</p>';
	    // Trate o erro de conexão conforme necessário
	}

	$consulta = "SELECT categoria_pai FROM subcategorias WHERE categoria = :nomeCategoria";
	$stmt = $conexao->prepare($consulta);
	$stmt->bindValue(':nomeCategoria', $nomeCategoria);
	$stmt->execute();

	// Use fetch para obter os resultados da consulta
	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

	// Verifique se a consulta retornou algum resultado antes de acessar a coluna "categoria_pai"
	if ($resultado) {
	    $categoriaPai = $resultado["categoria_pai"];
	} else {
	    // Trate o caso em que a categoria não foi encontrada, se necessário
	    echo "subcategoria não encontrada, não deveria ser possivel chegar aqui, favor reportar bug <br><br>";
	}

	// Consultar a estrutura da tabela
	$consulta = "DESCRIBE categorias";
	$resultado = $conexao->query($consulta);

	// Verificar se a coluna com o nome da categoria já existe
	$colunaExiste = false;

	//checa se o novo nome da categoria ja existe	
	while ($coluna = $resultado->fetch(PDO::FETCH_ASSOC)) {
	    if ($coluna['Field'] === $nomeCategoria) {
	        $colunaExiste = true;
	        break;
	    }
	}    	
    
	if ($colunaExiste) {
		
		// colocar todas as relações de subcategorias para a categoria pai
		$query = "UPDATE subcategorias
		          SET categoria_pai = :categoriaPai
		          WHERE categoria_pai = :nomeCategoria";
        
        $stmt = $conexao->prepare($query);
		$stmt->bindValue(':nomeCategoria', $nomeCategoria);
		$stmt->bindValue(':categoriaPai', $categoriaPai);
		$stmt->execute();

		// excluir a subcategoria 
		$query = "DELETE FROM subcategorias 
				  WHERE categoria = :nomeCategoria";
		
		$stmt = $conexao->prepare($query);
		$stmt->bindValue(':nomeCategoria', $nomeCategoria);
		$stmt->execute();

		// excluir coluna categoria
	    $query = "ALTER TABLE categorias
				  DROP COLUMN ".$nomeCategoria;

		$stmt = $conexao->prepare($query);
		$stmt->execute();
	
		echo "A categoria foi excluida com sucesso!<br><br>";
	    // Lide com a situação de categoria existente
	} else {
	    echo "A categoria já foi excluida, não deveria ser possivel chegar aqui, favor reportar bug.<br><br>";
	}

	header("location: categorias.php");
?>