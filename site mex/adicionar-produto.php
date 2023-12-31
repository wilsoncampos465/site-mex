<?php

	echo '<a href = novo-produto.php>voltar</a><br><br><br>';
	echo "<br>";
	$nome = $_POST['nome'];
	// Verifica se o nome da categoria possui espaço em branco
	if (strpos($nome, ' ') !== false) {
	    // Substitui os espaços por underscores
	    $nome = str_replace(' ', '_', $nome);
	}
	$preco = $_POST['preco'];
	$estoque = $_POST['estoque'];
	$codigo = $_POST['codigo'];
	$custo = $_POST['custo'];
	$descricao = $_POST['descricao'];

	$categoriasSelecionadas = isset($_POST['categorias']) ? $_POST['categorias'] : [];
	require "conexao.php";

	try{

		$conexao = new PDO($dsn, $usuario, $senha);

		$consulta = '
			SELECT COUNT(*) AS total FROM produtos WHERE nome = :nomeProduto
 		';
		$stmt = $conexao->prepare($consulta);
		$stmt->bindValue(':nomeProduto', $nome);
    	$stmt->execute();
    	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    	if ($resultado['total'] > 0) {
	        // O nome do produto já existe, exibir uma mensagem de erro
	        echo "ja existe um produto com este nome";
	    } else {
	        

			//adiciona o id do produto na tabela de categorias
			$query = "INSERT into categorias(id) values(:codigoProduto)";
			$stmt = $conexao->prepare($query);
		    $stmt->bindValue(':codigoProduto', $codigo);
		    $stmt->execute();

	    	// Realiza a consulta para obter as categorias existentes na tabela
			$consulta = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'categorias'";
			$stmt = $conexao->prepare($consulta);
			$stmt->execute();
			$categoriasExistentes = $stmt->fetchAll(PDO::FETCH_COLUMN);

			// Percorre todas as categorias existentes na tabela
			foreach ($categoriasExistentes as $categoriaExistente) {
				if ($categoriaExistente !== "id") {
				    if (in_array($categoriaExistente, $categoriasSelecionadas)) {
				        // A categoria foi selecionada, então atualiza ou insere o produto naquela categoria
				        $query = "UPDATE categorias SET $categoriaExistente = :codigoProduto WHERE id = :codigoProduto";
				    } else {
				        // A categoria não foi selecionada, então remove o produto daquela categoria
				        $query = "UPDATE categorias SET $categoriaExistente = NULL WHERE id = :codigoProduto";
				    }
				}
			    // Prepara e executa a consulta
			    $stmt = $conexao->prepare($query);
			    $stmt->bindValue(':codigoProduto', $codigo);
			    $stmt->execute();
			}





			//cria parta para salvar as fotos do produto
			$pastaDestino = './imagens/produtos/'.$nome;

			// confere se a pasta existe e cria ela
			if (!is_dir($pastaDestino)) {
			    mkdir($pastaDestino, 0775);

			}

			// verifica se as fotos foram recebidas
			$arquivo = isset($_FILES['arquivos']) ? $_FILES['arquivos'] : false;

			//inicialização de variavel dentro do for
			$ultimoNome = 0;
			$quant_fotos = count($arquivo['name']);
			//for que passa por cada foto
			for($i = 0; $i < $quant_fotos; $i++){	
				if ( isset( $arquivo[ 'name' ][$i] ) && $arquivo[ 'error' ][$i] == 0 ) {
				    $arquivo_tmp = $arquivo[ 'tmp_name' ][$i];
				    $nome_img = $arquivo[ 'name' ][$i];	
				    // Pega a extensão
				    $extensao = pathinfo ( $nome_img, PATHINFO_EXTENSION );
				    // Converte a extensão para minúsculo
				    $extensao = ".".strtolower ( $extensao );
				 
				    // Somente imagens, .jpg;.jpeg;.gif;.png
				    // Aqui eu enfileiro as extensões permitidas e separo por ';'
				    // Isso serve apenas para eu poder pesquisar dentro desta String
				    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

				 		$tamanho = $arquivo['size'][$i];

				 		$ultimoNome = $ultimoNome + 1;
						
						// Concatena a pasta com o nome
				        $destino = $pastaDestino."/".$ultimoNome.$extensao;
				        
				        // tenta mover o arquivo para o destino
				        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
							
				            echo '<br>Foto salva com sucesso em : ' . $destino;

					 		echo '<br>o novo nome da foto é:   '.$ultimoNome.$extensao;
					 		echo '<br>o tamanho da foto é:   '.($tamanho/1000).'Kb';
					 		echo '<hr><br>';
				        }
				        else
				            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
				    }
				    else
				        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
				}
				else
				    echo 'Você não enviou nenhum arquivo!';
			}

			try{

				$conexao = new PDO($dsn, $usuario, $senha);

				$query = '
		 		INSERT into produtos(nome, preco, descricao, estoque, custo_compra, codigo_produto, pasta_imagens, quantidade_fotos) values(:nome, :preco, :descricao, :estoque, :custo, :codigo, :pastaDestino, :quant_fotos);';
				$stmt = $conexao->prepare($query);
				$stmt->bindValue(':nome', $nome);
				$stmt->bindValue(':preco', $preco);
				$stmt->bindValue(':descricao', $descricao);
				$stmt->bindValue(':estoque', $estoque);
				$stmt->bindValue(':custo', $custo);
				$stmt->bindValue(':codigo', $codigo);
				$stmt->bindValue(':pastaDestino', $pastaDestino);
				$stmt->bindValue(':quant_fotos', $quant_fotos);
		    	$stmt->execute();
		    	echo "<br>sucesso em salvar no banco de dados<br>";
			}catch(PDOException $e){
				echo 'Erro: '.$e->getCode().'<br>Mensagem: <p>' .$e->getMessage().'</p><br><br><strong>Falha ao adicionar no banco de dados</strong>';
			}
	    }
    	
	}catch(PDOException $e){
		echo 'Erro: '.$e->getCode().'<br>Mensagem: <p>' .$e->getMessage().'</p><br><br><strong>Falha ao adicionar no banco de dados</strong>';
	}

?>