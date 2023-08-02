<?php 

	$novoNome = $_POST['novo-nome'];
	$nomeCategoria = $_POST['categoria-para-editar'];
	$categoriaPai =  $_POST['categoria-pai'];

	// Verifica se o nome da categoria possui espaço em branco
	if (strpos($novoNome, ' ') !== false) {
	    // Substitui os espaços por underscores
	    $novoNome = str_replace(' ', '_', $novoNome);
	}

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

	// Verificar se a coluna com o nome da categoria já existe
	$colunaExiste = false;

	//checa se o novo nome da categoria ja existe

	//se o nome da categoria não alterar vai pular esta etapa para mudar o nome para o mesmo nome, assim evitando fazer uma logica adicional
	if($novoNome != $nomeCategoria){
		while ($coluna = $resultado->fetch(PDO::FETCH_ASSOC)) {
		    if ($coluna['Field'] === $novoNome) {
		        $colunaExiste = true;
		        break;
		    }
		}    	
    }	

	if ($colunaExiste) {
	    echo "A categoria já existe no banco de dados.<br><br>";
	    // Lide com a situação de categoria existente
	} else {
	    
	
		// 1- mudar nome da coluna categoria
		// 2- mudar categoria pai
		// 3- atualizar o nome da categoria na tabela subcategorias
		// 4- atualizar o nome nas subcategorias que possuem ela como pai
	    // Use declarações preparadas para evitar injeção de SQL
	// Construa a consulta diretamente com o nome da coluna
	$query = "ALTER TABLE categorias CHANGE ".$nomeCategoria." ".$novoNome." varchar(20) DEFAULT NULL";

	$stmt = $conexao->prepare($query);
	$stmt->execute();

	// Agora atualize a tabela subcategorias
	$query = "UPDATE subcategorias
	          SET categoria = :novoNome, categoria_pai = :categoriaPaiNovo
	          WHERE categoria = :nomeAntigo";

	$stmt = $conexao->prepare($query);
	$stmt->bindValue(':novoNome', $novoNome);
	$stmt->bindValue(':categoriaPaiNovo', $categoriaPai);
	$stmt->bindValue(':nomeAntigo', $nomeCategoria);
	$stmt->execute();

	// Em seguida, atualize os registros onde a coluna categoria_pai é igual ao nome antigo da categoria
	$query = "UPDATE subcategorias
	          SET categoria_pai = :novoNome
	          WHERE categoria_pai = :nomeAntigo";

	$stmt = $conexao->prepare($query);
	$stmt->bindValue(':novoNome', $novoNome);
	$stmt->bindValue(':nomeAntigo', $nomeCategoria);
	$stmt->execute();

	echo "A categoria foi editada com sucesso!<br><br>";

	}

	header("location: categorias.php");
?>