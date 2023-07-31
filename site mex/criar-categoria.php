<?php 

	$nomeCategoria = $_POST['nome_categoria'];
	$tipoCategoria = $_POST['tipo-categoria'];

	// Verifica se o nome da categoria possui espaço em branco
	if (strpos($nomeCategoria, ' ') !== false) {
	    // Substitui os espaços por underscores
	    $nomeCategoria = str_replace(' ', '_', $nomeCategoria);
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

	while ($coluna = $resultado->fetch(PDO::FETCH_ASSOC)) {
	    if ($coluna['Field'] === $nomeCategoria) {
	        $colunaExiste = true;
	        break;
	    }
	}

	if ($colunaExiste) {
	    echo "A categoria já existe no banco de dados.<br><br>";
	    // Lide com a situação de categoria existente
	} else {
	    // A categoria não existe, então cria uma nova coluna na tabela "categorias"
	
	    $query ="Alter table categorias add column ".$nomeCategoria." varchar(20) DEFAULT NULL;";
	   
	    $conexao->exec($query);
	    echo "A nova categoria foi criada com sucesso!<br><br>";
		
		if($tipoCategoria == 0){
			$query = "
	 			INSERT into subcategorias(categoria) values('". $nomeCategoria ."');
	 			";
	 		$stmt = $conexao->prepare($query);
	    	$stmt->execute();
	    	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

	    	echo "subcategoria adicionada com sucesso<br><br>";
		} 

		if($tipoCategoria == 1){
			
			$categoriaPai = $_POST['categoria-pai'];	

			$query = '
	 		insert into subcategorias(categoria, categoria_pai) values( "'. $nomeCategoria .'", "'. $categoriaPai .'");';
			$stmt = $conexao->prepare($query);
	    	$stmt->execute();

	    	echo "subcategoria adicionada com sucesso<br><br>";
		} else{
			echo "não possui subcategoria<br><br>";
		}
	}

	header("location: categorias.php");
?>