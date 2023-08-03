<?php 

	
	$nomeProduto = $_POST['produto-para-excluir'];

	require "conexao.php";

	try {
	    $conexao = new PDO($dsn, $usuario, $senha);
	} catch (PDOException $e) {
	    echo 'Erro: ' . $e->getCode() . '<br>Mensagem: <p>' . $e->getMessage() . '</p>';
	    // Trate o erro de conexão conforme necessário
	}
	$consulta = "SELECT nome, pasta_imagens, quantidade_fotos FROM produtos WHERE nome = :nomeProduto";
	$stmt = $conexao->prepare($consulta);
	$stmt->bindValue(':nomeProduto', $nomeProduto);
	$stmt->execute();

	// Use fetch para obter os resultados da consulta
	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
	$diretorio = $resultado["pasta_imagens"];
	$quantidade_fotos = $resultado["quantidade_fotos"];
	//se o produto existe, ele é excluido
	if($resultado){
		// excluir o produto da base de dados
		$query = "DELETE FROM produtos 
				  WHERE nome = :nomeProduto";
		
		$stmt = $conexao->prepare($query);
		$stmt->bindValue(':nomeProduto', $nomeProduto);
		$stmt->execute();
		
		//exclui as imagens
		excluirPasta($diretorio);
		
	}
	//caso por algum motivo o produto não conste na base de dados mas apareça nas opções do site
	else{
		echo "produto não encontrado, não deveria ser possivel chegar aqui, favor reportar o bug";
	}


	header("location: adm-produtos.php");
	
	function excluirPasta($caminho) {
		if (is_dir($caminho)) {
			$diretorio = dir($caminho);

			// Excluir todos os arquivos e subpastas dentro da pasta
			while ($arquivo = $diretorio->read()) {
				if ($arquivo != '.' && $arquivo != '..') {
					if (is_dir($caminho . '/' . $arquivo)) {
						excluirPasta($caminho . '/' . $arquivo);
					} else {
					unlink($caminho . '/' . $arquivo);
					}
				}
			}

			$diretorio->close();

			// Excluir a pasta vazia
			rmdir($caminho);
			echo "produto excluido com sucesso";
			return true;
		} else {
			echo "erro ao deletar imagens";
			return false;
		}
	}
?>