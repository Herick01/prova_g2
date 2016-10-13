<?php
	require_once '../model/pontosTuristicosModel.php';
	require_once '../model/conexao.php';
?>
<html>
	<head>
		<meta charset="UTF_8">
		<title>Descrição</title>
	</head>
	<body>
		<?php
			$OpontosTuristicos = new pontosTuristicosModel();
			if (isset($_GET['id']))
				$id = $_GET['id'];
			$OpontosTuristicos->mostrarDetalhes($id);
			$resultadoBusca = $OpontosTuristicos->getConsulta();
		?>
		<table border="1">
			<tr>
				<th> Nome</th>
				<th> Cidade</th>
				<th> Estado</th>
				<th> Descrição</th>
				<th> Avaliacao</th>
			</tr>
		<?php
			while ($linha = $resultadoBusca->fetch_assoc()) {
		?>
			<tr>
				<td><?php echo $linha['nome']; ?></td>
				<td><?php echo $linha['cidade']; ?></td>
				<td><?php echo $linha['estado']; ?></td>
				<td><?php echo $linha['descricao']; ?></td>
				<td><?php echo $linha['avaliacao']; ?></td>
			</tr>
		<?php
			}
		?>	
		</table>
		<a href="pontosTuristicosView.php">Voltar</a>
	</body>
</html>