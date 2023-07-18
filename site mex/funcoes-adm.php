<?php 
	require "conexao.php";
	
	//seleciona o nome mais alto (ultimo) das fotos do estilo escolhido
	$query = "select * from senha";
	try{
		$conexao = new PDO($dsn, $usuario, $senha);

		$stmt = $conexao->query($query);
		$senha = $stmt->fetch(PDO::FETCH_ASSOC);

		$senha = $senha['senha'];

	} catch(PDOException $e){
		echo 'Erro: '.$e->getCode().'<br>Mensagem: <p>' .$e->getMessage().'</p>';
	}
?>
<script type="text/javascript">
	
</script>