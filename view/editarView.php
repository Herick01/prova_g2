<?php
require_once '../model/pontosTuristicosModel.php';
require_once '../model/conexao.php';
$OpontoTuristico = new pontosTuristicosModel();
$id = $_GET['id'];
$OpontoTuristico->mostrarDetalhes($id);
$resultado = $OpontoTuristico->getConsulta();
$linha = $resultado->fetch_assoc();
?>
<form action="../controller/pontosTuristicosController.php?&action=editar&id=<?php echo $linha['idPontoTuristico'] ?>" method="POST">
<br>Nome: <input type="text" name="nome" value="<?php echo $linha['nome'] ?>">
<br>Cidade: <input type="text" name="cidade" value="<?php echo $linha['cidade'] ?>">
<br>Estado: <input type="text" name="estado" value="<?php echo $linha['estado'] ?>">
<br>Descricao: <textarea name="descricao" style="height : 200 width : 500"><?php echo $linha['descricao'] ?></textarea>
<br>Avaliacao: <input type="number" min="0" max="10" step="1" name="avaliacao" value="<?php echo $linha['avaliacao'] ?>">
<button type="submit">Concluir</button>
</form>