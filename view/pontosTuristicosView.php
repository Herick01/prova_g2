<?php 
	require_once '../model/pontosTuristicosModel.php';
	require_once '../model/conexao.php';
?>
<html>
<head>
	<title>Pontos Turisticos</title>
	<meta charset="UTF_8">
</head>
<body>
	<form action="pontosTuristicosView.php?&action='busca'" method="POST">
		Informe nome ou cidade para filtrar a busca:<input type="text" name="busca">
		<button type="submit">Buscar</button>
	</form>
	<?php
	$OpontosTuristicos = new pontosTuristicosModel();
	if (isset($_GET['action'])) {
		if(isset($_POST['busca']))
			$busca = $_POST['busca'];
		$OpontosTuristicos->listBusca($busca);
	}else {
		$OpontosTuristicos->listAll();
	}
		$resultadoBusca = $OpontosTuristicos->getConsulta();
		?>
		<table border="1">
		<tr>
		<th> Nome</th>
		<th> Cidade</th>
		<th> Detalhes</th>
		</tr>
		<?php
			while ($linha = $resultadoBusca->fetch_assoc()) {
			?>
				<tr>
				<td><?php echo $linha['nome']; ?></td>
				<td><?php echo $linha['cidade']; ?></td>
				<td><a href="pontosTuristicosDetalhesView.php?&id=<?php echo $linha['idPontoTuristico']; ?>">ver</td>
				</tr>
			<?php
			}
		?>	
		</table>
</body>
</html>